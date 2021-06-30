<?php
//Library Endroid
require('qcode-endroid/autoload.php');

use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;

if (isset($_POST['generate'])) {
    $tempdir = "temp/";
    if (!file_exists($tempdir))
        mkdir($tempdir);

    $isi_teks = $_POST['keterangan'] . ', ' . $_POST['nama'];
    $namafile = $_POST['nama'] . '.png';
    $qrCode = new QrCode();
    $qrCode->setText($isi_teks);
    $qrCode->setWriterByName('png');
    $qrCode->setMargin(3);
    $qrCode->setEncoding('UTF-8');
    $qrCode->setErrorCorrectionLevel(new ErrorCorrectionLevel(ErrorCorrectionLevel::HIGH));
    // Warna QRCode
    $qrCode->setForegroundColor(['r' => 255, 'g' => 96, 'b' => 22, 'a' => 0]);
    // Warna Background
    $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
    // Set Color
    $qrCode->setForegroundColor(['r' => 255, 'g' => 96, 'b' => 22, 'a' => 0]);
    $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
    //Set Logo
    $qrCode->setLogoPath('logo.png');
    $qrCode->setLogoSize(50, 50);
    $qrCode->setRoundBlockSize(true);
    $qrCode->setValidateResult(false);
    $qrCode->setWriterOptions(['exclude_xml_declaration' => true]);

    // Save it to a file
    $qrCode->writeFile($tempdir . $namafile);

?>
    <a download="<?php echo $namafile; ?>" href="<?php echo $tempdir . '/' . $namafile; ?>" title="ImageName" id="myCheck">
        <img alt="ImageName" src="<?php echo $tempdir . '/' . $namafile; ?>">
    </a>
    <script language="JavaScript" type="text/javascript">
        window.onload = function() {
            window.document.getElementById("myCheck").click();
        }
    </script>
<?php
}
