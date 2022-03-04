<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"/>
    <meta name="author" content="nguyenhoanglong"/>
    <link href="site.css" rel="stylesheet"/>
    <title>XẾP LOẠI KẾT QUẢ TUYỂN SINH</title>
</head>
<body style="background-color: #5e268c;color: white;font-size: 20px;">
    <div id="wrapper">
        <h2>Xếp loại kết quả</h2>
        <form action="#" method="post">
            <div class="row">
                <div class="lbltitle">
                    <label>TOÁN</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Toan" value="<?php echo isset($_POST["Toan"]) ? $_POST["Toan"] : ""; ?>" style="color: white; background-color: #5e268c; font-size: 16px;"/>

                </div>
            </div>

            <div class="row">
                <div class="lbltitle">
                    <label>LÝ</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Ly" value="<?php echo isset($_POSST["Ly"]) ? $_POST["Ly"] : "";?>" style="color: white; background-color: #5e268c; font-size: 16px;"/>
                </div>
            </div>

            <div class="row">
                <div class="lbltitle">
                    <label>HÓA</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Hoa" value="<?php echo isset($_POST["Hoa"])?$_POST["Hoa"]: "";?>" style="color: white; background-color: #5e268c; font-size: 16px;"/>
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label>Chọn khu vực: </label>
                </div>
                <div class="lblinput">
                    <select name="Areas" style="color: white; background-color: #5e268c; font-size: 16px;">
                        <option value="" selected>-- Chọn khu vực --</option>
                        <option value="1" >Khu vực 1</option>
                        <option value="2">Khu vực 2</option>
                        <option value="3">Khu vực 3</option>
                        <option value="4">Khu vực 4</option>
                        <option value="5">Khu vực 5</option>
                        <option value="6">Khu vực 6</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Xếp loại" style="color: white; background-color: #5e268c; font-size: 16px;"/>
                </div>
            </div>
        </form>

        <div id="result">
            <h2>Xếp loại tổng điểm</h2>
            <div class="lbltitle">
                <label>Tổng điểm</label>
            </div>
            <div class="lbloutput">
                <?php
                    echo isset($_POST["btnsubmit"]) ? $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"] : ""; 
                ?>
            </div>
        </div>
        <div class="row">
            <div class="lbltitle">
                <label>Xếp loại</label>
            </div>
            <div class="lbloutput">
                <?php 
                    if(isset($_POST["btnsubmit"]))
                    {
                        $Sum = $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"];
                        if($Sum >= 24)
                        {
                            echo "Giỏi";
                        }
                        else if($Sum >= 21)
                        {
                            echo "Khá";
                        }
                        else if($Sum >= 15)
                        {
                            echo "Trung bình";
                        }
                        else
                        {
                            echo "Yếu";
                        }
                    }
                ?>
            </div>
        </div>

        <div class="row">
            <div class="lbltitle">
                <label>Điểm ưu tiên: </label>
            </div>
            <div class="lbloutput">
                <?php
                    if(isset($_POST["btnsubmit"]))
                    {
                        $FirstPrior = empty($_POST["Areas"]) ? 0 : $_POST["Areas"];
                        switch($FirstPrior)
                        {
                            case 0:
                            case 4:
                            case 5:
                            case 6:
                                {
                                    echo "0";
                                }
                                break;
                            case 1:
                            case 2:
                                {
                                    echo "5";
                                }
                                break;
                            case 3: 
                                {
                                    echo "3";
                                }
                                break;
                            default:
                            {
                                echo "0";
                            }
                            break;

                        }
                    }
                ?>
            </div>
        
        </div>
        <div class="row">
            <div class="lbltitle">
                <label>Điểm xét tuyển:</label>
            </div>
            <div class="lbloutput">
                <?php
                    if(isset($_POST["btnsubmit"]))
                    {
                        $Sumofall = 0;
                        switch($FirstPrior)
                        {
                            case 0:
                            case 4:
                            case 5:
                            case 6:
                            {
                                $Sumofall = ($Sum == 30) ? $Sum : $Sum;
                                echo "$Sumofall";
                            }
                            break;
                            case 1: 
                            case 2: 
                            {
                                switch($Sum)
                                {
                                    case 25:
                                        {
                                            $Sumofall = $Sum + 5;
                                        }
                                        break;
                                    case 26:
                                        {
                                            $Sumofall = $Sum + 4;
                                        }
                                        break;
                                    case 27:
                                        {
                                            $Sumofall = $Sum + 3;
                                        }
                                        break;
                                    case 28:
                                        {
                                            $Sumofall = $Sum + 2;
                                        }
                                        break;
                                    case 29:
                                        {
                                            $Sumofall = $Sum + 1;
                                        }
                                        break;
                                    case 30:
                                        {
                                            $Sumofall = $Sum;
                                        }
                                        break;
                                    default:
                                        {
                                            $Sumofall = $Sum + 5;
                                        }
                                        break;
                                }
                                echo "$Sumofall";
                            }
                            break;
                            case 3:
                            {
                                switch($Sum)
                                {
                                    case 27:
                                        {
                                            $Sumofall = $Sum + 3;
                                        }
                                        break;
                                    case 28:
                                        {
                                            $Sumofall = $Sum + 2;
                                        }
                                        break;
                                    case 29:
                                        {
                                            $Sumofall = $Sum + 1;
                                        }
                                        break;
                                    default:
                                        {
                                            $Sumofall = $Sum + 3;
                                        }
                                        break;
                                }
                                echo "$Sumofall";
                            }
                            break;
                            default:
                            {
                                $Sumofall = $Sum;
                            }
                            break;
                        }
                    }
                ?>
            </div>
        </div>

    </div>

</body>
</html>