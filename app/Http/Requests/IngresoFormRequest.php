<?php

namespace sisVentas\Http\Requests;

/* use Illuminate\Foundation\Http\FormRequest; */
use sisVentas\Http\Requests\Request;


class IngresoFormRequest extends FormRequest
{
    
        public function authorize()
        {
            return true;
        }
    
        public function rules()
        {
            return [
                'idproveedor'=>'required',
                'tipo_comprobante'=>'required|max:20',
                'serie_comprobante'=>'max:7',
                'num_comprobante'=>'required|max:10',
                'idarticulo'=>'required',
                'cantidad'=>'required',
                'precio_compra'=>'required',
                'precio_venta'=>'required'
            ];
        }
    }