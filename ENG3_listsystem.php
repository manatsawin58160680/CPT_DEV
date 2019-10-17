<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Document</title>
            <link rel="stylesheet" href="/style.css">
            <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-pro/css/all.min.css">
            <link rel="stylesheet" href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="node_modules/select2/dist/css/select2.min.css">
            <link rel="stylesheet" href="public/css/custom.css">
            <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
            <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
        
            <style>
                body{
                    font-family: 'Kanit', sans-serif; 
                }
                .id_card{
                    margin : 10px;
                }
                .id_card_header{
                    height : 160px;
                    background-color : 	#00CED1	;
                    /*backgrout of title*/
                }
                .img_system{
                    height : 100px;
                    weight : 100px;
                    color : black;
                }
                .topic_txt{
                    font-size : 40px;
                    color : black;
                }
                .card_mrgup{
                    weight : 60px;
                    height : 90px;
                    background-color : #F3D250  ;
                }
                .mrg_1_1{
                    text-align: right;
                    margin-left : 0px;
                    margin-top : 45px;
                    font-weight: bold;
                    font-size : 16px;
                    
                }
                .img_man{
                    height : 100px;
                    weight : 20px;
                    color : black;
                }
                .body_card{
                     background-color : #DEF2F1;    
                }
                /*.OT{
                    font-size : 16px;
                    transition: 0.3s;
                }*/
                .OT:hover {
                    text-decoration:none;
                    background-color : red;
                    color : white;
                    font-weight : bold;
                    font-size : 18px;
                    transition: 0.3s;
                }
                #OT:hover{
                    text-decoration:none;
                    background-color : red;
                    color : white;
                    font-weight : bold;
                    font-size : 18px;
                    transition: 0.3s;
                }  
               
            </style>
            <script>
                    $(document).ready(function(){
                        $(".icon-angle-d").click(function(){
                            $("#list_system").toggle(200);
                        });
                        $(".icon-angle-d2").click(function(){
                            $("#list_manager").toggle(200);
                        });
                    });
                
            </script>
        </head>
        <body>
            <div class = "card">
                <div class = "card-body" style = "background-color : black;height : 30px; ">
                    <center style = "color : white"> CANON Prachinburi </i></center>
                </div>
            </div>
            <div class="card id_card shadow  rounded">
                <div class="card-header id_card_header" >
                   <center>
                       <img class = "img_system" src = "pic/system_icon.png">
                       <span class = "topic_txt">ENGINEER 3 SYSTEM LIST OF DEPARTMENT</span>
                   </center>
                </div>
                <div class="card-body body_card">
                    <div class = "row">
                        <div class = "col-md-4">
                            <div class = "card card_mrgup" >
                                 <div class = "row">
                                     <div class = "col-md-6">    
                                           <center style = "font-size : 50px;"><i class="fas fa-user" id = "icon"></i></center>
                                    </div>
                                    <div class = "col-md-6">
                                        <div style = "margin-top : 10px;">
                                            <span class = "mrg_1_1">MR Satake Hidefumi</span><br>
                                        </div>
                                        <i class="fas fa-mobile-alt"></i></span> <span style = "IP - Moblie : 5046"><b>IP_Phone :</b> 5046 </span><br>
                                        <span>Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-4">
                            <div class = "card card_mrgup" >
                                 <div class = "row">
                                     <div class = "col-md-5">    
                                           <center style = "font-size : 50px;"><i class="fas fa-user"></i></center>
                                    </div>
                                    <div class = "col-md-7">
                                        <div style = "margin-top : 10px;">
                                            <span class = "mrg_1_1">MR Jeadsada Namuangruk</span><br>
                                        </div>
                                        <i class="fas fa-mobile-alt"></i></span> <span style = "IP - Moblie : 5046"><b>IP_Phone :</b> 5270 </span><br>
                                        <span>Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-4">
                            <div class = "card card_mrgup" >
                                 <div class = "row">
                                     <div class = "col-md-6">    
                                           <center style = "font-size : 50px;"><i class="fas fa-user"></i></center>
                                    </div>
                                    <div class = "col-md-6">    
                                        <div style = "margin-top : 10px;">
                                            <span class = "mrg_1_1">MR KASUMATA OISHI</span><br>
                                        </div>
                                        <i class="fas fa-mobile-alt"></i></span> <span style = "IP - Moblie : 5046"><b>IP_Phone :</b> 0000 </span><br>
                                        <span>Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "card" style = "margin : 22px;">
                <div class="card-body">
                    <div class = "row">         
                        <div class = "col-md-4">
                            <div class="card"> <!-- card_System_shortcut -->  
                                <div class="card-header bg-danger ">
                                    <b style = "color : white;font-size: 18px;">SYSTEM</b>
                                    <span class = "float-right">
                                        <a class="btn btn-small btn-danger icon-angle-d" href="#">
                                       <i class="fas fa-angle-down"></i></a>
                                </div>
                                <ul class="list-group list-group-flush" id = "list_system">
                                    <a id = "OT" href = "http://cptsvs528.canon-pt.co.th/Eng_system/Login.aspx" target="_blank"> 
                                    <li class="list-group-item OT">
                                        <i class="icon-globe" id = "icons_globe"></i>
                                        <span>REGISTER OVERTIME</span>
                                    </li>
                                    <li class="list-group-item OT"><i class="fas fa-user"></i> 
                                        <a href = "http://cptsvs528.canon-pt.co.th/Eng_system/showuser.aspx" style="text-decoration:none;" target="_blank"> PERSONAL DATA</a></li>
                                    <li class="list-group-item OT"><i class="icon-shopping-cart" href = "http://cptsvs528.canon-pt.co.th/Eng_system/showuser.aspx" style="text-decoration:none;" target="_blank" ></i> BOOKING BUS AND VAN</li>
                                    <li class="list-group-item OT"><i class="fab fa-amilia"></i> SPARE PART SYSTEM</li>
                                    <li class="list-group-item OT"><i class="icon-shopping-cart"></i> ORDER PART SYSTEM</li>
                                </ul>
                            </div> <!-- end card_System_shortcut -->
                        </div> <!-- end of col-md -->
                    </div> <!-- end of row -->
                </div> <!-- card_body_outside -->
            </div> <!-- card_outside --> 

        </body>