<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas5phpsapna</title>
</head>
<body>
<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];

$ar_skill = ["HTML"=>10,"CSS"=>10, "Javascript"=>20, "RWD Bootstrap"=>20, "Python"=>30, "MySQL"=>30,"Laravel"=>40];
$domisili = ["Jakarta","Bandung","Bekasi","Malang","Surabaya", "lainnya"];
?>
<fieldset style="background-color:yellow;">
    <table>
        <thead>
            <tr>
                <td>
            <th>FORM REGISTER</th>
            </tr>
        </thead>
        <tbody>
            <form method="POST">
            <tr>
                <td>NIM : </td>
                <td> 
                    <input type="text" name="nim" >
                </td>
            </tr>
            <tr>
                <td>NAMA : </td>
                <td> 
                    <input type="text" name="nama" >
                </td>
            </tr>
            <tr>
                <td>JENIS KELAMIN : </td>
                <td> 
                    <input type="radio" name="jk" value="L" >perempuan &nbsp;
                    <input type="radio" name="jk" value="P" >laki-laki
                </td>
            </tr>
            <tr>
                <td>PROGRAM STUDY: </td>
                <td> 
                    <select name="prodi">
                        <?php 

                        foreach($ar_prodi as $prodi => $v){
                            ?>
                            <option value="<?= $prodi ?>"><?= $v ?></option>
                       <?php } ?>
                        </select>
                </td>
            </tr>
                <td>SKILL PROGRAMING : </td>
                <td> 
                    <?php 
                    foreach ($ar_skill as $skill => $s){
                        ?>
                    <input type="checkbox" name="skill[]" value="<?= $skill ?>" ><?= $skill ?>
                    <?php } ?>
                </td>
            </tr>
            <tr>
            <td>EMAIL : </td>
                <td> 
                    <input type="text" name="email" >
                </td>
            </tr>
                <tfoot>
                <tr>
                    <th colspan="2">
                        <button name="proses">Submit</button>
                    </th>
                </tr>
            </tfoot>
            </form>

        </tbody>
    </table>
</fielset>
<?php 

if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $proses = $_POST['proses'];
    echo "Nim: $nim <br>" ;
    echo "Nama: $nama <br>" ;
    echo "Jenis Kelamin: $jk <br>" ;
    echo "Program Studi: $prodi <br>" ;
    echo "Skill :";
    foreach($_POST['skill'] as $item){  
    echo $item .",";
    } 
    $hasil = hitung($skill,$proses);
    $email = $_POST['email'];
    echo "Email: $email <br>" ;

}

?>
<?php  
//Function
function hitung($skill,$proses){
    if(isset($_POST['skill'])){
        $skill=$_POST["skill"];
        $c= count($skill);
        $Skor = 0.0;
        for($i=0;$i<$c;$i++){
            if($skill[$i]=='HTML'){
                $Skor=$Skor+10;
            }
            if($skill[$i]=='CSS'){
                $Skor=$Skor+10;  
            }
            if($skill[$i]=='Javascript'){
                $Skor=$Skor+20;
            }
            if($skill[$i]=='RWD Bootstrap'){
                $Skor=$Skor+20;     
            }
            if($skill[$i]=='Python'){
                $Skor=$Skor+30;      
            }
            if($skill[$i]=='MySQL'){
                $Skor=$Skor+30;    
            }
            if($skill[$i]=='Laravel'){
                $Skor=$Skor+40;    
            }
        }
        echo "<br>Skor Skill: ".$Skor."";
        if ($Skor <=0){$grade = "TIDAK MEMADAI";
            }elseif ($Skor <=40){$grade = "KURANG";
            }elseif ($Skor <=60){$grade = "CUKUP";
            }elseif ($Skor <=100){$grade = "BAIK";
            }elseif ($Skor >=100){$grade = "SANGAT BAIK";
            }else{$grade = "INPUT SKILL";
            }echo "<br>Kategori Skill :".$grade."<br>";
    }
}
//function
?>    
</body>
</html>





