@include('php/src/RtcTokenBuilder')

<?php

if(Auth::user()->user_type == 'specialist')
    $channel = Auth::user()->username."_".$_GET['name'];
elseif (Auth::user()->user_type == 'client')
    $channel = $_GET['name']."_".Auth::user()->username;
$appID = "a07aa44092ca4fe8afa40963aac5d7a1";
$appCertificate = "b7bd112462e7458287d315899abcea91";
$data = DB::table('channels')->where('channel',$channel)->first();
// $data == null ?  DB::table('channels')->insert(['channel' => $channel,'status' => '1']): ($data->status == 1)?DB::table('channels')->where('channel', $channel)->update(['status' => '2']):DB::table('channels')->where('channel', $channel)->update(['status' => '1']);
if($data == null)
    DB::table('channels')->insert(['channel' => $channel,'status' => '2','caller'=>Auth::user()->username,'call_to'=>$_GET['name'],'created_at'=>date("Y-m-d H:i:s")]);
else if($data->status == 0 )
    DB::table('channels')->where('channel', $channel)->update(['status' => '2','caller'=>Auth::user()->username,'call_to'=>$_GET['name']]);
else if($data->status == 2 )
    DB::table('channels')->where('channel', $channel)->update(['status' => '3']);
$channelName = $channel;
$uid = 2882341271;
$uidStr = "";
$role = RtcTokenBuilder::RoleAttendee;
$expireTimeInSeconds = 33600;
$currentTimestamp = (new DateTime("now", new DateTimeZone('UTC')))->getTimestamp();
$privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;

// $token = RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $channelName, $uid, $role, $privilegeExpiredTs);
// echo 'Token with int uid: ' . $token . PHP_EOL;

$token = RtcTokenBuilder::buildTokenWithUserAccount($appID, $appCertificate, $channelName, $uidStr, $role, $privilegeExpiredTs);
// echo 'Token with user account: ' . $token . PHP_EOL;
$arr = array('channel'=>$channel,'token'=>$token . PHP_EOL);
echo json_encode($arr);

?>
