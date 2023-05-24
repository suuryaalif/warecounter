<?php

namespace App\Models;

use CodeIgniter\Model;
use Codeigniter\BaseModel;
use CodeIgniter\Database\Query;

class CounterModel extends Model
{
    protected $table            = 'counters';
    protected $primaryKey       = 'id_counter';
    protected $allowedFields    = ['counter_code', 'record_code', 'do_no', 'shipper', 'driver_name', 'driver_phone', 'pol_no', 'status', 'created_at', 'updated_at', 'qrcode', 'qrfiles'];
    protected $useTimestamps = true;

    public function getAll($counterCode)
    {
        if ($counterCode != null) {
            $builder = db_connect()->table('counters');
            $query = $builder->getWhere(['counter_code' => $counterCode]);
            return $query->getResultArray();
        } else {
            $builder = db_connect()->table('counters');
            $query = $builder->select('*')->orderBy('status ASC, counter_code ASC');
            return $query->get()->getResultArray();
        }
    }

    public function nextCounter()
    {
        $builder = db_connect()->table('counters');
        $query = $builder->select('*')->where('status', 'menunggu')->orderBy('counter_code', 'updated_at', 'ASC')->limit(1);
        return $query->get()->getRowArray();
    }

    public function nowCounter()
    {
        $builder = db_connect()->table('counters');
        $query = $builder->select('*')->where('status', 'bongkar')->orderBy('counter_code', 'updated_at', 'ASC')->limit(1);
        return $query->get()->getRowArray();
    }


    public function generateCode()
    {
        $builder = db_connect()->table('counters')->select('RIGHT(counter_code,3) as numb', FALSE)->orderBy('numb', 'DESC')->limit(1);
        $getNumber = $builder->get()->getRowArray();

        if ($getNumber >= 0) {
            $code = intval($getNumber['numb']) + 1;
        } else {
            $code = 1;
        }

        $date = date('dmy');
        $lastNumber = str_pad($code, 3, "0", STR_PAD_LEFT);
        $panelCounter = "GBSC" . $lastNumber;
        $recordCounter = "CL" . $date . $lastNumber;
        $dataCounter = [
            'inputCountercode' => $panelCounter,
            'inputRecordcode' => $recordCounter
        ];
        return $dataCounter;
    }

    public function procNext($id)
    {
        $builder = db_connect()->table('counters');
        $query = $builder->where('id_counter', $id)->set('status', 'bongkar');
        return $query->update();
    }
}
