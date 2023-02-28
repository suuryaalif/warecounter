<?php

namespace App\Models;

use CodeIgniter\Model;
use Codeigniter\BaseModel;

class CounterModel extends Model
{
    protected $table            = 'counters';
    protected $primaryKey       = 'id_counter';
    protected $allowedFields    = ['counter_code', 'do_no', 'shipper', 'driver_name', 'driver_phone', 'pol_no', 'status', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function getAll()
    {
        $builder = db_connect()->table('counters');
        $query = $builder->select('*')->limit(10)->orderBy('counter_code', 'DESC');
        return $query->get()->getResultArray();
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
        $query = $builder->select('*')->where('status', 'sedang bongkar')->orderBy('counter_code', 'updated_at', 'ASC')->limit(1);
        return $query->get()->getRowArray();
    }
}
