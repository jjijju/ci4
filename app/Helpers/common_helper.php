<?php

/**
 * Debug
 *
 * 디버그
 *
 * @author  jjoo
 * @access  public
 * @param   all   출력 메세지
 *
 */
if (! function_exists('debug')) {
    function debug($variable)
    {
        $debugging = var_export($variable, true);

        echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">";
        echo "<div style='color:#990099; border:1px solid #777; padding:2px; background-color: #E5E5E5;'>";
        echo " Debug -> <span style='color:#008000;'> ";

        $result = "\n============================================\n";
        $result .= (!empty($debugging) && $debugging != 'NULL') ? $debugging : sprintf($variable);
        $result .= "\n============================================\n";

        echo "<xmp>";
        echo $result;
        echo "</xmp>";
        echo "</span></div>";
    }
}

/**
 * Get Json Decode
 *
 * json 파일을 읽어와 decode
 *
 * @author  jjoo
 * @access  public
 * @param   string   파일 경로
 * @return  object array
 *
 */
if (! function_exists('getJsonDecode')) {
    function getJsonDecode($dir)
    {
        return json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'].$dir));
    }
}

/**
 * Date Convert
 *
 * 날짜 형식 변환
 *
 * @author jjoo
 * @access public
 * @param [date] $[date] [날짜]
 * @param [string] $[type] [구분]
 * @return [date] [날짜형식]
 *
 */
if (! function_exists('dateConv')) {
    function dateConv($date, $type)
    {
        switch ($type) {
            case '1':
                return date("YmdHis", strtotime($date)); break;
            case '2':
                return date("YmdHi", strtotime($date)); break;
            case '3':
                return date("YmdH", strtotime($date)); break;
            case '4':
                return date("Ymd", strtotime($date)); break;
            case '5':
                return date("Ym", strtotime($date)); break;
            case '6':
                return date("Y-m-d H:i:s", strtotime($date)); break;
            case '7':
                return date("Y-m-d H:i", strtotime($date)); break;
            case '8':
                return date("Y-m-d H", strtotime($date)); break;
            case '9':
                return date("Y-m-d", strtotime($date)); break;
            case '10':
                return date("Y-m", strtotime($date)); break;
            case '11':
                return date("Y.m.d H:i:s", strtotime($date)); break;
            case '12':
                return date("Y.m.d H:i", strtotime($date)); break;
            case '13':
                return date("Y.m.d H", strtotime($date)); break;
            case '14':
                return date("Y.m.d", strtotime($date)); break;
            case '15':
                return date("Y.m", strtotime($date)); break;
            case '16':
                return date("Y/m/d H:i:s", strtotime($date)); break;
            case '17':
                return date("Y/m/d H:i", strtotime($date)); break;
            case '18':
                return date("Y/m/d H", strtotime($date)); break;
            case '19':
                return date("Y/m/d", strtotime($date)); break;
            case '20':
                return date("Y/m", strtotime($date)); break;
            case '21':
                return date("Y년 m월 d일 H시 i분 s초", strtotime($date)); break;
            case '22':
                return date("Y년 m월 d일 H시 i분", strtotime($date)); break;
            case '23':
                return date("Y년 m월 d일 H시", strtotime($date)); break;
            case '24':
                return date("Y년 m월 d일", strtotime($date)); break;
            case '25':
                return date("Y년 m월", strtotime($date)); break;
            case '26':
                return date("Y년", strtotime($date)); break;
            case '27':
                return date("Y", strtotime($date)); break;
            default:
                break;
        }
    }
}

/**
 * File Size Convert
 *
 * 파일 사이즈를 포맷된 형식으로 출력
 *
 * @author  jjoo
 * @access  public
 * @param   int
 * @return  string
 *
 */
if (! function_exists('fileSizeConv')) {
    function fileSizeConv($filesize, $decimals = 2)
    {
        $format = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
        $factor = floor((strlen($filesize) - 1) / 3);
        return sprintf("%.{$decimals}f", $filesize / pow(1024, $factor)) . @$format[$factor];
    }
}

/**
 * Over Length String Replace
 *
 * 문자열 특정 길이를 넘어갈 시 원하는 문자로 치환
 *
 * @author  jjoo
 * @access  public
 * @param   string
 * @return  string
 *
 */
if (! function_exists('overLengthStrReplace')) {
    function overLengthStrReplace($string, $min, $max, $replace = '...')
    {
        return mb_strimwidth($string, $min, $max, $replace, "UTF-8");
    }
}


/**
 * segment rebuild
 *
 * 세그먼트 
 *
 * @author jjoo
 * @access public
 * @param [array] $[segArr] [세그먼트]
 * @return [array] [배열상수]
 *
 */
if (! function_exists('segmentRebuild')) {
    function segmentRebuild($segArr)
	{
		$cnt = count($segArr);

		switch ($cnt) {
			case '3':
				return [
					'key' => $segArr['1'] . "_" . $segArr['2'],
					'url' => $segArr['1'] . "/" . $segArr['2'],
					'case' => $segArr['3']
				];
				break;
			case '2':
				return [
					'key' => $segArr['1'],
					'url' => $segArr['1'], 
					'case' => $segArr['2']
				];
				break;
			default:
				break;
		}
    }
}