<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sheets;

class StatsController extends Controller
{
    public function getStats(){
        $trainingLeads = count_training_leads();
        $fellowshipLeads = count_fellowship_leads();
        $startupLeads = count_startups_leads();
        $consultancyLeads = count_consultancy_leads();
        $csrLeads = count_csr_leads();
        $ispLeads = count_isp_leads();

        return response()->json([
            'trainingLeads' => $trainingLeads,
            'fellowshipLeads' => $fellowshipLeads,
            'startupLeads' => $startupLeads,
            'consultancyLeads' => $consultancyLeads,
            'csrLeads' => $csrLeads,
            'ispLeads' => $ispLeads,
        ]);
    }
}
