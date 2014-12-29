<?php
session_start();
error_reporting(0);
if($s_status == 1)
{
switch($s_count)		
{	
	case 0:
		header('Location: click.php');
		break;
	case 1:
		header('Location: start.php');
		break;
	case 2:
		header('Location: worldsend.php');
		break;
	case 3:
		header('Location: numbers.php');
		break;
	case 4:
		header('Location: english.php');
		break;
	case 5:
		header('Location: php.php');
		break;
	case 6:
		header('Location: physics.php');
		break;
	case 7:
		header('Location: alibaba.php');
		break;
	case 8:
		header('Location: volks.php');
		break;
	case 9:
		header('Location: codmw.php');
		break;
	case 10:
		header('Location: levelix.php');
		break;
	case 11:
		header('Location: telepathy.php');
		break;
	case 12:
		header('Location: sidney.php');
		break;
	case 13:
		header('Location: listentomax.php');
		break;
	case 14:
		header('Location: binary.php');
		break;
	case 15:
		header('Location: whatsit.php');
		break;
	case 16:
		header('Location: dreamtheater.php');
		break;
	case 17:
		header('Location: rain.php');
		break;
	case 18:
		header('Location: communist.php');
		break;
	case 19:
		header('Location: whoisx.php');
		break;
	case 20:
		header('Location: nazi.php');
		break;
	case 21:
		if($s_medcheck==1)
		header('Location: nomedium.php');
		else
		header('Location: medium.php');
		break;

	case 22:
		header('Location: inventor.php');
		break;
	case 23:
		header('Location: buildurself.php');
		break;
	case 24:
		header('Location: artifact.php');
		break;
	case 25:
		header('Location: dd.php');
		break;	
	case 26:
		header('Location: ruler.php');
		break;
	case 27:
		header('Location: yummy.php');
		break;
	case 28:
		if($_SESSION['googol']==1)
		header('Location: googol.php');
		else
		header('Location: search.php');
		break;
	case 29:
		header('Location: latin.php');
		break;
	case 30:
		header('Location: trim.php');
		break;
	case 31:
//		header('Location: write.php');
//		break;
	case 32:
		header('Location: math.php');
		break;
	case 33:
		header('Location: missing.php');
		break;
	case 34:
		header('Location: game.php');
		break;
	case 35:
		header('Location: place.php');
		break;
	case 36:
		header('Location: finaldoor.php');
		break;
	case 37:
		header('Location: youfoundit.php');
		break;
		
}
}
else
{
	header('Location: index.php');
} 

?>
