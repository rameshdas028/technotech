<?php

namespace App\Exports;

use App\Profileform;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProfileformExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $excelData = [];
        $profileHeaderNames = Profileform ::whereUserId(null)->get();
        $excelDataHeader =[];
        foreach($profileHeaderNames as $profileHeaderName ){
            array_push($excelDataHeader,$profileHeaderName->form_name);
           }
        $excelData[]=$excelDataHeader;
        $profiles = User::with('profileforms')->get();
        $count =1;
        foreach ($profiles as $profile) {
            $xsl=[];
            foreach($profile->profileforms as $profileform){
            array_push($xsl,$profileform->form_name);                
            }
            $excelData[$count]=$xsl;
            $count++;
        }
        return collect($excelData);
        // dd($excelData);
        // return Profileform::all();
    }
}
