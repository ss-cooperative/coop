<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo $data->name;
//print_r($data);
?>
<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules.patient
 */-->

<div class="panel panel-default">
    <div class="panel-heading">
        <?= "คุณ".$data->name." ".$data->lastname ?>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-2">
               <img src="<?=genSrcImg($data->p_id)?>" width="100%" height="200" class="img-thumbnail"/>
            </div>

            <div class="col-sm-10">

                <table class="table">
                    <tr><th class="text-right" width="20%">รหัสสมาชิก</th><td colspan="3"> <?= $data->account_no ?></td></tr>
                    <tr><th class="text-right" width="20%">ชื่อ - สกุล</th><td colspan="3"> <?= $data->name ?> <?= $data->lastname ?></td></tr>
                    <tr>
                        <th class="text-right" width="20%">เลขบัตรประชาชน</th>
                        <td> <?= $data->id_card ?></td>
                        <th class="text-right" width="20%">วัน/เดือน/ปีเกิด</th>
                        <td > <?= $data->birthday ?></td>
                    </tr>


                    <tr><th class="text-right" width="20%">ที่อยู่</th><td colspan="3"> <?= $data->p_address ?></td></tr>
                    <tr><th class="text-right" width="20%">เบอร์โทรศัพท์</th><td colspan="3"> <?= $data->p_tel ?></td></tr>
                    
                </table>               
            </div>
        </div>
        <?php include('_stock.php'); ?>
    </div>
</div>


