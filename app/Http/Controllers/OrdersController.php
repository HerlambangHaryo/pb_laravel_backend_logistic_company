<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;
use Illuminate\Support\Facades\Storage;

use App\Models\Order; 
use App\Models\Detailorder; 

class OrdersController extends Controller
{
    //
    public $template    = 'ecaps_v12';
    public $mode        = '';
    public $themecolor  = ''; 
    public $content     = 'Orders';

    public function index()
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isMobile());

        // ----------------------------------------------------------- Initialize
            $panel_name     = $this->content;
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 
            $data           = Order::whereIN('is_approval', ['1', '2', '3']) 
                                ->get();

        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function approve(Order $Order)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  
            
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action  
        
            $data = Order::findOrFail($Order->id);

            $data->update([
                'is_approval'		    => 3, 
            ]); 

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }

    public function cancel(Order $Order)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  
            
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action  
        
            $data = Order::findOrFail($Order->id);

            $data->update([
                'is_approval'		    => 4, 
            ]); 

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }

    
}
