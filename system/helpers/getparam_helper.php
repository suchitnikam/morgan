<?php
if ( ! function_exists('getParam'))
{
    /**
     * @author Rajshree
     * @return type
     * to fetch values from url
     */
    function getParam()
    {
        $ci = & get_instance();
        $totalsegment = $ci->uri->total_segments();
        $keyValueFlag = ((($totalsegment%2) == 0)?true:false);
        $resultparam = array();
        for($i=1;$i<=$totalsegment;$i++)
        {
            if($keyValueFlag)
            {
                if(($i%2 != 0))
                {
                   $key = $i;
                }
                else
                {
                    $value = $i;
                }
            }
            else
            {
                if(($i%2 == 0))
                {
                   $key = $i;
                }
                else
                {
                    $value = $i;
                }
            }

            $resultparam[$ci->uri->segment($key)] = $ci->uri->segment($value);
            if($resultparam['page'])
            {
                $resultparam['page'] = ((is_numeric($resultparam['page']))?$resultparam['page']:'1');
            }
        }
        return $resultparam;
    }
}

/**
* @author Mayuri
* @return type
* to fetch client's IP address
*/
//function clientIp()
//{
//    $clientIP = '';
//    if (isset ($_SERVER ['HTTP_X_FORWARDED_FOR']))
//    {
//        $clientIP = $_SERVER ['HTTP_X_FORWARDED_FOR'];
//    }
//    elseif(isset ($_SERVER ['HTTP_X_REAL_IP']))
//    {
//        $clientIP = $_SERVER ['HTTP_X_REAL_IP'];
//    }
//    else
//    {
//        $clientIP = $_SERVER['REMOTE_ADDR'];
//    }
//    return $clientIP;
//}
    function getCleanValue( $data = array() )
    {
        foreach($data as $key => $value)
        {
                if(!is_array($value))
                {
                    $value = trim($value);
                    $returnValue[$key] = htmlentities($value,ENT_QUOTES);
                }
                else
                {
                    $returnValue[$key] = $value;
                }
        }
        return $returnValue;
    }

    function getPopulateValue($data = array())
    {
        $returnValue = array();
        foreach($data as $key => $value)
        {
                if(!is_array($value))
                {
                    $returnValue[$key] = html_entity_decode($value);
                }
                else
                {
                    $returnValue[$key] = $value;
                }
        }

        return $returnValue;
    }
    
//    function getPopulateValueWithQuote($data = array())
//    {
//        $returnValue = array();
//        foreach($data as $key => $value)
//        {
//                $returnValue[$key] = html_entity_decode($value,ENT_QUOTES);
//        }
//        return $returnValue;
//    }

//    function generateQueryCode($data)
//    {
//        //Generating query no
//        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
//        for ($i = 0; $i < 6; $i++)
//        {
//            $result .= $chars[mt_rand(0, 35)];
//        }
//
//        $data['queryno'] = $result;
//        //If generated query no is already present,then again generate new query no
//        $ci= &get_instance();
//        $ci->load->model('support_model');
//        $fetchByQueryNo = $ci->support_model->fetchByQueryNo($data);
//        if(count($fetchByQueryNo) > 0)
//        {
//            self::generateQueryCode($data);
//        }
//        else
//        {
//            return $data['queryno'];
//        }
//    }
//    function generateOrderNo()
//    {
//        //Generating coupon code
//        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
//        for ($i = 0; $i < 6; $i++)
//        {
//            $result .= $chars[mt_rand(0, 35)];
//        }
//
//        $data['orderno'] = $result;
//        //If generated coupon code is already present,then again generate new coupon code
//        $CI = & get_instance();
//        $CI->load->model('user_detecta_kit_model');
//        $fetchByOrderNoArr = $CI->user_detecta_kit_model->fetchByOrderNo($data);
//        if($fetchByOrderNoArr > 0)
//        {
//            self::generateOrderNo();
//        }
//        else
//        {
//            return $data['orderno'];
//        }
//    }
//    function convertToUsdFormat($data)
//    {
//        $returnValueArr = array();
//        if($data)
//        {
//            setlocale(LC_MONETARY, 'en_US');
//            $returnValue = money_format('%i', $data) . "\n";
//            $returnValueArr = explode(' ',$returnValue);
//
//            return $returnValueArr[1];
//        }
//    }
//    function convertToDbFormat($data)
//    {
//        $returnValue = '';
//        if($data)
//        {
//            $returnValueArr = explode(',',$data);
//            if(count($returnValueArr) > 0)
//            {
//                foreach($returnValueArr as $value)
//                {
//                    $returnValue .= $value;
//                }
//            }
//            else
//            {
//                $returnValue = $data;
//            }
//            return $returnValue;
//        }
//    }
//    function saveAdminTracker($data = array())
//    {
//        $CI = &get_instance();
//        $CI->load->model('admin_tracker_model');
//        $CI->admin_tracker_model->addTracker($data);
//    }
?>