<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Alert Move Link
 * 메세지 출력 후 이동
 *
 * @access  public
 * @param   string  출력 메세지
 * @param   string  이동 할 경로
 *
 */
if (! function_exists('alertMove')) {
    function alertMove($msg, $url)
    {
        echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">";
        echo "<script>\n";
        echo "alert(\"$msg\");\n";
        echo "location.href=\"$url\";\n";
        echo "</script>\n";
        exit;
    }
}

/**
 * Silent Move Link
 * 메세지 없이 이동
 *
 * @access  public
 * @param   string  이동 할 경로
 *
 */
if (! function_exists('silentMove')) {
    function silentMove($url)
    {
        echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">";
        echo "<script>\n";
        echo "location.href=\"$url\";\n";
        echo "</script>\n";
        exit;
    }
}

/**
 * Alert Message
 * 메세지 경고창
 *
 * @access  public
 * @param   string  출력 메세지
 *
 */
if (! function_exists('alertMsg')) {
    function alertMsg($msg)
    {
        echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">";
        echo "<script>\n";
        echo "alert(\"$msg\")\n";
        echo "</script>\n";
        exit;
    }
}

/**
 * Alert Back Link
 * 메세지 출력 후 이전 페이지 이동
 *
 * @access  public
 * @param   string  이동 할 경로
 *
 */
if (! function_exists('alertBack')) {
    function alertBack($msg)
    {
        echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">";
        echo "<script>\n";
        echo "alert(\"$msg\");\n";
        echo "history.back();\n";
        echo "</script>\n";
        exit;
    }
}

/**
 * Silent Move Back Link
 * 메세지 없이 이전 페이지 이동
 *
 * @access  public
 *
 */
if (! function_exists('silentBack')) {
    function silentBack()
    {
        echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">";
        echo "<script>\n";
        echo "history.back();\n";
        echo "</script>\n";
        exit;
    }
}

/**
 * Alert Close
 * 메세지 출력 후 창 닫기
 *
 * @access  public
 * @param   string  출력 메세지
 *
 */
if (! function_exists('alertClose')) {
    function alertClose($msg)
    {
        echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">";
        echo "<script>\n";
        echo "alert(\"$msg\");\n";
        echo "window.close();\n";
        echo "</script>\n";
        exit;
    }
}

/**
 * Parent Move
 * 메세지 출력 부모창으로 이동 후 자식창 닫기
 *
 * @access  public
 * @param   string  출력 메세지
 * @param   string  이동 할 경로
 *
 */
if (! function_exists('parentMove')) {
    function parentMove($msg, $url)
    {
        echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">";
        echo "<script>\n";
        echo "alert(\"$msg\");\n";
        echo "window.opener.location=\"$url\"\n";
        echo "window.close();\n";
        echo "</script>\n";
        exit;
    }
}

/**
 * Parent Move
 * 부모창으로 이동 후 자식창 닫기
 *
 * @access  public
 * @param   string  출력 메세지
 * @param   string  이동 할 경로
 *
 */
if (! function_exists('parentSilentMove')) {
    function parentSilentMove($url)
    {
        echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">";
        echo "<script>\n";
        echo "window.opener.location=\"$url\"\n";
        echo "window.close();\n";
        echo "</script>\n";
        exit;
    }
}

/* End of file alert_helper.php */
/* Location: ./application/helpers/alert_helper.php */