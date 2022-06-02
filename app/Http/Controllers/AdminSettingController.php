<?php

namespace App\Http\Controllers;

use App\Models\ExportDatabase;
use App\Models\Setting;

use Illuminate\Http\Request;
use mysqli;

class AdminSettingController extends Controller
{


    // settings page
    public function settings()
    {
        $exports = ExportDatabase::all()->sortDesc();

        $settings = Setting::find(1);

        return view('admins.settings.index',compact('exports','settings'));
    }

    public function updateSettings(Request $request)
    {
        $settings = Setting::find(1);

        $settings->name = $request->name;
        $settings->phone = $request->phone;
        $settings->email = $request->email;
        $settings->iban = $request->iban;

        if ($request->logo) {
            $settings->logo = time() . '-' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path('assets/admin/images/logo/'),  $settings->logo);
        }

        $settings->save();

        return redirect()->back();

    }


    public function export()
    {

        $tables = '*';

        $db = new mysqli('localhost', 'root', '', 'rms');
        if ($tables == '*') {

            $tables = array();
            $result = $db->query("SHOW TABLES");

            while ($row = $result->fetch_row()) {
                $tables[] = $row[0];
            }
        } else {

            $tables = is_array($tables) ? $tables : explode(',', $tables);
        }

        $return = '';

        foreach ($tables as $table) {

            $result = $db->query("SELECT * FROM $table");
            $numColumns = $result->field_count;

            /* $return .= "DROP TABLE $table;"; */
            $result2 = $db->query("SHOW CREATE TABLE $table");
            $row2 = $result2->fetch_row();

            $return .= "\n\n" . $row2[1] . ";\n\n";

            for ($i = 0; $i < $numColumns; $i++) {

                while ($row = $result->fetch_row()
                ) {
                    $return .= "INSERT INTO $table VALUES(";
                    for ($j = 0; $j < $numColumns; $j++) {
                        $row[$j] = addslashes($row[$j]);
                        $row[$j] = $row[$j];
                        if (isset($row[$j])) {
                            $return .= '"' . $row[$j] . '"';
                        } else {
                            $return .= '""';
                        }
                        if ($j < ($numColumns - 1)) {
                            $return .= ',';
                        }
                    }
                    $return .= ");\n";
                }
            }

            $return .= "\n\n\n";
        }


        $dbname = 'db-'.Date('Y-m-d-his');
        $handle = fopen('assets/admin/dbs/' .$dbname . '.sql', "w+");
        $status = fwrite($handle, $return);

        fclose($handle);
        echo "Database Export Successfully!";



        // add the file name to database
        $newexport = new ExportDatabase();
        $newexport->name = $dbname.'.sql';

        $newexport->save();

        return redirect()->back();

    }
            // ==============================


}
