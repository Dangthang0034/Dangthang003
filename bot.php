<?php
system("clear");
error_reporting(0);
$mlen="999999999999999";

$a3="content-type:application/json;charset=utf-8";
$a4="t:VFZSamVFMXFXVFJOVkZVMFRsRTlQUT09";

$u1="https://gateway.golike.net/api/users/me";
$u2="https://gateway.golike.net/api/tiktok-account";

$u4="https://gateway.golike.net/api/adcertising/publishers/tiktok/complete-jobs";
$uloi="https://gateway.golike.net/api/adcertising/publishers/tiktok/skip-jobs";
$uloi1="https://gateway.golike.net/api/report/send";





function mothai(){
echo"                            \r";}

function termux(){global $link;
@system('termux-open '.$link);}
//for($i=1;$i<$mlen;$i++){
//if($i>10){mothai();beak;}
//echo" Đang chờ hoàn thành $i\r";sleep(1);}

function clear(){system("clear");}
function autho(){global $autho,$user;
file_put_contents('autho.txt',"$autho|$t", FILE_APPEND);}
function nhapautho(){
	global $autho,$t;
	echo"NHAP t: >> ";
	$t=trim(fgets(STDIN));clear();
	while(true){
	echo"NHAP AUTHOZATION >> ";
	$autho=trim(fgets(STDIN));clear();
	if($autho==false){continue;}
	autho();break;
}}
function chonv(){global $nhanlai;
while(true){
echo"Nhận lại tiền khoảng mấy lần ";
$nhanlai=trim(fgets(STDIN));clear();
if($nhanlai>1 or $nhanlai==1){break;
continue;}
}}
function baoloi(){global $daloi,$skip,$bloi,$tsm,$baoloi,$skip1,$guiloi;
$daloi='{
  "status": 200,
  "success": true,
  "data": [],
  "error": [],
  "message": null,
  "server": "'.$bloi.'"
}';
$guiloi="plike($kip,$tsm,$daloi)";
$baoloi="plike($skip1,$tsm,$daloi)";
echo"Bỏ qua thành công\n";sleep(3);mothai();
}

$tho2=explode("\n",file_get_contents('autho.txt'));
$tho1=$tho2[0];
$autho=explode('|',$tho1)[0];
$t=explode('|',$tho1)[1];
if($autho==false){nhapautho();}else{}

$a5=":$t";
$a1="authorization:$autho";
$a2="user-agent:Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Mobile Safari/537.36";
$tsm=array($a1,$a2,$a3,$a4,$a5);
$tk=json_decode(glike($u1,$tsm),true);
///////////////////////////////////////////////


$tkok=json_decode(glike($u2,$tsm),true);
while(true){
for($i=0;$i<$mlen;$i++){
$id=$tkok['data'][$i]['id'];
if($id==false){
echo"=============================================\n\n";
break;}
$nana=$tkok['data'][$i]['nickname'];
$mama=$tkok['data'][$i]['unique_username'];
echo "Tài khoản số [$i] | $nana | $mama\n";}

//api/advertising/publishers/tiktok/jobs?account_id=$tid&data=null
//api/report/send

echo"Mời bạn chọn tài khoản Tiktok làm nhiệm vụ : ";
$chon=trim(fgets(STDIN));clear();
$tid=$tkok['data'][$chon]['id'];
$u3="https://gateway.golike.net";$sv1="$u3/api/advertising/publishers/tiktok/jobs?account_id=$tid&data=null";
$us1="https://sv2.golike.net";$sv2="$us1/api/advertising/publishers/tiktok/jobs?account_id=$tid&data=null";
$us2="https://sv3.golike.net";$sv3="$us2/api/advertising/publishers/tiktok/jobs?account_id=$tid&data=null";
$us3="https://sv4.golike.net";$sv4="$us3/api/advertising/publishers/tiktok/jobs?account_id=$tid&data=null";
$us4="https://sv5.golike.net";$sv5="$us4/api/advertising/publishers/tiktok/jobs?account_id=$tid&data=null";
$us5="https://dev.golike.net";$sv6="$us5/api/advertising/publishers/tiktok/jobs?account_id=$tid&data=null";
$uloi="https://gateway.golike.net/api/report/send";

if($tid==false){
echo"Bạn chưa thêm tài khoản Tiktok số $chon Vào nhé\n";sleep(3);clear();continue;}
$cnana=$tkok['data'][$chon]['nickname'];
$vava=$tkok['data'][$chon]['unique_username'];
echo"Bạn đã chọn tài khoản số $chon $cnana để chạy\n";sleep(2);clear();break;}
//////////////////////////////////////////////////////////////////////////
chonv();
$tk2=json_decode(glike($u1,$tsm),true);
$ten=$tk2['data']['name'];
$xuu=$tk2['data']['coin'];
echo"User $ten hiện có $xuu Xu\n";
echo">>>$tid \n";sleep(3);
while(true){
$job=json_decode(glike($sv1,$tsm),true);
$uid=$job['data']['id'];
$link=$job['data']['link'];
$type=$job['lock']['type'];
$mid=$job['lock']['object_id'];
$bloi=$job['server'];
if($uid==false){echo"dang tim job\r";sleep(3);
$job=json_decode(glike($sv2,$tsm),true);
$uid=$job['data']['id'];
$link=$job['data']['link'];
$type=$job['lock']['type'];
$mid=$job['lock']['object_id'];
$bloi=$job['server'];
if($uid==false){echo"load sv2\r";sleep(3);
$job=json_decode(glike($sv3,$tsm),true);
$uid=$job['data']['id'];
$link=$job['data']['link'];
$type=$job['lock']['type'];
$mid=$job['lock']['object_id'];
$bloi=$job['server'];
if($uid==false){echo"load sv3\r";sleep(3);
$job=json_decode(glike($sv4,$tsm),true);
$uid=$job['data']['id'];
$link=$job['data']['link'];
$type=$job['lock']['type'];
$mid=$job['lock']['object_id'];	
$bloi=$job['server'];
if($uid==false){echo"load sv4\r";sleep(3);
$job=json_decode(glike($sv5,$tsm),true);
$uid=$job['data']['id'];
$link=$job['data']['link'];
$type=$job['lock']['type'];
$mid=$job['lock']['object_id'];
$bloi=$job['server'];
if($uid==false){echo"load sv5\r";sleep(3);
$job=json_decode(glike($sv6,$tsm),true);
$uid=$job['data']['id'];
$link=$job['data']['link'];
$type=$job['lock']['type'];
$mid=$job['lock']['object_id'];
$bloi=$job['server'];
continue;}}}}}
echo"<<< $bloi >>>\n";
$skip="https://$bloi.golike.net/api/advertising/publishers/tiktok/skip-jobs";
$skip1="https://$bloi.golike.net/api/report/send";
echo"$skip\n";
echo"$skip1\n";
echo">> $link \n";sleep(3);
echo"nhan job $type \n";sleep(3);




if($type=="comment"){
	baoloi();
}
if($type=="like"){
	termux();sleep(10);
}

if($type=="follow"){echo"$link\n";

termux();sleep(10);
}	

$danhan='{"ads_id":'.$uid.',"account_id":'.$tid.',"async":true,"data":null}';
$nhantien=json_decode(plike($u4,$tsm,$danhan),true);

for($i=1;$i<$mlen;$i++){
	if($i>6){mothai();break;}
	$ketqua=$nhantien['status'];
	if($ketqua==200){
		$poi=$nhantien['data']['prices'];
		$msg=$nhantien['message'];
		$msg1=explode(' ',explode('Số jobs đã làm trong ngày '.$msg)[1][0]);
break;}else{
	echo"Đang bấm hoàn thành\r";sleep(3);
	continue;}}
if($i>6){
mothai();}
if($ketqua==200){
	echo"$cnana đã làm $msg1 Jobs + $poi Xu \n";}
}
























function glike($host,$tsm){
	$mr = curl_init();
	curl_setopt_array($mr, array(
	CURLOPT_PORT =>"443",
	CURLOPT_URL => "$host",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => $tsm));
	$mr2 = curl_exec($mr); curl_close($mr);
	return $mr2;}
function plike($host,$tsm,$data){
	$mr = curl_init();
	curl_setopt_aray($mr, array(
	CURLOPT_PORT =>"443",
	CURLOPT_URL => "$host",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTIDIELDS => $data,
	CURLOPT_HTTPHEADER => $tsm));
	$mr2 = curl_exec($mr); curl_close($mr);
	return $mr2;}
