<?
if($file=fopen("tulisan.txt", "r"))
{
    echo("Dibawah ini menggunakan fgets()<BR>");
    while(!feof($file)) {
         $string=fgets($file,255);
         echo($string);
    }
    fclose($file);
   
    $file=fopen("tulisan.txt", "a+");
    echo("<P>Yang ini menggunakan fgetss()<BR>");
    while(!feof($file)) {
         $string=fgetss($file,255);
         echo($string);
    }
   
    $tambahan="Ini Tambahannya";
    echo("<P>\$tambahan = $tambahan<BR>");
    fputs($file,$tambahan);
    fclose($file);
    $file=fopen("tulisan.txt","r");
    echo("Setelah Ditambah : <BR>");
    while(!feof($file)) {
         $string=fgets($file,255);
         echo($string);
    }
    fclose($file);
}
else
{
    echo("File Gagal dibuka");
}
?>