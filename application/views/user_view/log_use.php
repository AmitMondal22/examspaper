<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url(); ?>main_file/img/logo.png" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log In</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>main_file/accets/user_acc.css">

</head>

<body class="b-col">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadowc my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b> Sign in</b></h1>
                                    </div>
                                    <form class="user" action="log_action" method="post">
                                        <div class="form-group input-con">
                                            <i class="fas fa-envelope"></i>
                                            <input type="email" class=" input-field"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="u_email">
                                        </div>
                                        <div class="form-group input-con">
                                            <i class="fas fa-key"></i>
                                            <input type="password" class=" input-field"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Password" name="u_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[~,!,@,#,$,%,^,&,_,]).{8,}">
                                        </div>
                                        <!-- <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div> -->
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" value="Login" class="btn d-btn btn-block">
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url(); ?>forgot-account">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url(); ?>create-account">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <svg id="e4ebe004-ac85-4249-bdf7-a9685d9ba22f" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 820 725.17352" class="svgi"><title></title><circle cx="426.15967" cy="350.30375" r="350.30375" fill="#f2f2f2"/><path d="M389.41627,685.21208c-22.56492,34.60437-16.38211,78.61668-16.38211,78.61668s42.76778-12.09246,65.3327-46.69683S454.749,638.51525,454.749,638.51525,411.9812,650.60771,389.41627,685.21208Z" transform="translate(-190 -87.41324)" fill="#3f3d56"/><path d="M372.91411,763.42633s-.54932-.08764-1.56033-.29219c-.80645-.16361-1.91676-.39738-3.27253-.71878-12.1201-2.85764-44.343-12.51748-65.41-37.91479-26.36737-31.80212-25.25706-76.23279-25.25706-76.23279s40.31663,6.55095,66.88267,35.10975q1.72688,1.84079,3.3602,3.816c22.94289,27.67056,25.08172,64.90163,25.25121,74.10566C372.93162,762.67834,372.91411,763.42633,372.91411,763.42633Z" transform="translate(-190 -87.41324)" fill="#7323ff"/><path d="M356.652,685.21208c22.56492,34.60437,16.38212,78.61668,16.38212,78.61668s-42.76779-12.09246-65.33271-46.69683-16.38212-78.61668-16.38212-78.61668S334.08711,650.60771,356.652,685.21208Z" transform="translate(-190 -87.41324)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="2"/><path d="M372.90826,761.2992c-.59608.71878-1.122,1.33238-1.55448,1.83494-.95836,1.09279-1.50187,1.66551-1.50187,1.66551s-.66032-.82985-1.77066-2.38429c-6.09511-8.49692-25.70116-38.70954-24.18763-73.60892q.12273-2.74368.40323-5.42891,1.72688,1.84079,3.3602,3.816C370.59994,714.8641,372.73877,752.09517,372.90826,761.2992Z" transform="translate(-190 -87.41324)" opacity="0.1"/><path d="M406.36616,691.33024C404.58258,732.6032,373.94478,764.8,373.94478,764.8s-27.746-34.71986-25.96245-75.99282,32.42139-73.46979,32.42139-73.46979S408.14975,650.05728,406.36616,691.33024Z" transform="translate(-190 -87.41324)" fill="#7323ff"/><line x1="183.94478" y1="676.21802" x2="190.68055" y2="529.60758" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="2"/><ellipse cx="410" cy="691.70413" rx="410" ry="33.46939" fill="#3f3d56"/><path d="M665.16134,377.55434c-10.22172,3.452-19.48214,11.526-21.57532,22.10989-.97029,4.90609-.37541,10.00627-1.19193,14.94028-1.89369,11.44308-10.87614,20.18223-19.16092,28.29966s-16.84038,17.54954-17.445,29.13248c-.66212,12.68359,8.53642,24.56607,6.94469,37.16679-1.84926,14.63945-17.31156,24.12557-21.13385,38.37771-2.55232,9.51678.57528,19.76824,5.72092,28.171,9.80557,16.01228,26.56626,26.883,44.41511,32.71059s36.85832,7.05363,55.6334,7.25035c22.86083.23953,47.68171-1.7231,64.8582-16.811a51.95919,51.95919,0,0,0,17.24947-33.82634c1.63176-17.4771-5.66271-35.53562-.63115-52.35212,3.16658-10.58338,11.1076-20.249,9.9225-31.2322-1.15873-10.73884-10.538-18.35073-16.97235-27.0262-6.00763-8.10007-9.65307-17.66582-13.22586-27.09651L746.3447,395.10105c-2.40313-6.34326-5.042-13.01469-10.39749-17.178-10.02593-7.794-26.14724-6.26264-37.8707-4.65515C687.20062,374.75918,675.62033,374.02219,665.16134,377.55434Z" transform="translate(-190 -87.41324)" fill="#2f2e41"/><path d="M668.98972,471.54985s5.41908,17.612-35.22405,37.93359,4.06431,41.9979,4.06431,41.9979l47.417,10.83817s48.77176-6.77385,54.19085-14.90248,14.90248-35.224,12.19294-39.28836A63.34152,63.34152,0,0,0,744.8569,500s-32.51451-5.41908-31.15973-20.32156S668.98972,471.54985,668.98972,471.54985Z" transform="translate(-190 -87.41324)" fill="#ffb9b9"/><path d="M668.98972,471.54985s5.41908,17.612-35.22405,37.93359,4.06431,41.9979,4.06431,41.9979l47.417,10.83817s48.77176-6.77385,54.19085-14.90248,14.90248-35.224,12.19294-39.28836A63.34152,63.34152,0,0,0,744.8569,500s-32.51451-5.41908-31.15973-20.32156S668.98972,471.54985,668.98972,471.54985Z" transform="translate(-190 -87.41324)" opacity="0.1"/><circle cx="505.40776" cy="368.55674" r="43.35267" fill="#ffb9b9"/><path d="M690.66606,547.417s-52.21052-3.81827-53.20069-39.84273c0,0-18.60218-2.15517-24.02127,3.26391s-23.0311,9.4834-23.0311,23.03111,29.805,54.19084,29.805,54.19084,16.25725,54.19085,9.4834,63.67424-8.12863,33.86928-8.12863,33.86928,67.73856-5.41908,78.57672,0,54.19085,5.41908,56.90039,0S754.3403,612.446,754.3403,612.446s12.19294-16.25725,9.4834-35.22405l32.5145-37.93359s-12.19294-36.57882-31.15973-36.57882c0,0-25.74065-6.77385-26.418-3.38692S751.63076,540.64317,690.66606,547.417Z" transform="translate(-190 -87.41324)" fill="#7323ff"/><path d="M568.73666,666.63689s12.19294,18.96679,43.35267,23.0311,36.57882-6.77385,33.86928-9.48339-35.22405-14.90249-35.22405-14.90249l-18.96679-14.90248Z" transform="translate(-190 -87.41324)" fill="#ffb9b9"/><path d="M790.91912,650.37963,755.69507,670.7012s-46.06222-2.70954-28.45019,10.83817,50.12653,8.12862,50.12653,8.12862l31.15973-14.90248Z" transform="translate(-190 -87.41324)" fill="#ffb9b9"/><path d="M614.79888,685.60368s-32.51451,79.93149,6.77385,92.12443,147.67005,9.4834,172.05593-6.77385,31.15973-37.93359,27.09542-44.70745-31.15973-25.74065-50.12653-27.09542S614.79888,685.60368,614.79888,685.60368Z" transform="translate(-190 -87.41324)" fill="#2f2e41"/><path d="M614.79888,685.60368s-32.51451,79.93149,6.77385,92.12443,147.67005,9.4834,172.05593-6.77385,31.15973-37.93359,27.09542-44.70745-31.15973-25.74065-50.12653-27.09542S614.79888,685.60368,614.79888,685.60368Z" transform="translate(-190 -87.41324)" opacity="0.05"/><path d="M768.27664,690.56957s114.76691-41.54471,113.41214,8.58182-73.15764,63.67424-73.15764,63.67424l-21.67634,2.70954L667.635,769.59949s4.06431-21.67634-5.41909-24.38588c0,0,31.15974-8.12863,32.51451-9.4834s78.57672-28.45019,83.99581-29.805,21.67633-12.19294,33.86927-10.83817c0,0,13.54772-10.83817,28.4502-8.12863L799.04774,689.668Z" transform="translate(-190 -87.41324)" fill="#2f2e41"/><path d="M768.27664,690.56957s114.76691-41.54471,113.41214,8.58182-73.15764,63.67424-73.15764,63.67424l-21.67634,2.70954L667.635,769.59949s4.06431-21.67634-5.41909-24.38588c0,0,31.15974-8.12863,32.51451-9.4834s78.57672-28.45019,83.99581-29.805,21.67633-12.19294,33.86927-10.83817c0,0,13.54772-10.83817,28.4502-8.12863L799.04774,689.668Z" transform="translate(-190 -87.41324)" opacity="0.1"/><polygon points="558 609.885 572.469 642.898 660.529 611.738 667.303 594.126 644.272 590.062 597.97 598.19 577.888 603.61 558 609.885" fill="#2f2e41"/><polygon points="558 609.885 572.469 642.898 660.529 611.738 667.303 594.126 644.272 590.062 597.97 598.19 577.888 603.61 558 609.885" opacity="0.1"/><path d="M560.608,737.085s25.74065,32.51451,55.54562,40.64313,46.06221-2.70954,46.06221-2.70954L652.73247,737.085l-4.06432-24.38588-17.612-12.19294-35.22405-16.25725-41.9979-13.54771s-17.612-2.70954-17.612,0,16.25726,43.35267,16.25726,43.35267Z" transform="translate(-190 -87.41324)" fill="#2f2e41"/><path d="M591.76777,754.697s5.41908,39.28836,12.19294,41.9979,27.09542-2.70954,32.5145-5.41909,23.83913-15.21063,23.83913-15.21063S595.83208,751.98746,591.76777,754.697Z" transform="translate(-190 -87.41324)" fill="#f2f2f2"/><polygon points="525.052 671.348 550.793 675.412 548.083 706.572 512.18 697.851 525.052 671.348" fill="#ffb9b9"/><path d="M731.17988,767.43318s-12.06363,14.35925.12931,22.48787l8.12863,6.77386s27.09542,5.41908,29.805,8.12863,13.54771-4.06432,13.54771-4.06432,1.35477-40.64313,0-43.35267-17.612-5.41909-18.96679-2.70954-17.612,6.77385-27.09543,4.06431Z" transform="translate(-190 -87.41324)" fill="#f2f2f2"/><path d="M622.9275,695.08708S528.09353,639.54146,513.191,659.863s-31.15973,48.77176,12.19294,70.4481,178.82979,66.38378,178.82979,66.38378,20.32156-31.15974,20.32156-39.28836c0,0-71.80286-32.51451-83.9958-35.22405s-60.9647-33.86928-67.73856-36.57882-16.25725-10.83817-16.25725-10.83817Z" transform="translate(-190 -87.41324)" fill="#2f2e41"/><path d="M595.83208,527.09546l-5.41908,4.06432s-12.19294,31.15973-13.54771,48.77176-17.612,71.80286-16.25726,78.57672,2.70954,12.19294,10.83817,18.96679c0,0,10.83817-24.38588,29.805-20.32156l23.0311-83.99581Z" transform="translate(-190 -87.41324)" fill="#7323ff"/><path d="M785.5,527.09546,796.3382,539.2884s6.77386,16.25726,6.77386,20.32157,13.54771,63.67424,14.90248,66.38378,6.77385,36.57882,0,44.70745-18.9668,13.54771-18.9668,13.54771,8.12863-28.45019-17.612-29.805l2.70954-10.83817-24.38588-81.28627Z" transform="translate(-190 -87.41324)" fill="#7323ff"/><path d="M598.54162,620.36961v71.361A17.15651,17.15651,0,0,0,615.444,708.88519l149.23772,2.21093a17.15651,17.15651,0,0,0,17.398-16.49525l2.745-71.36924a17.15652,17.15652,0,0,0-16.89522-17.81409l-151.98269-2.20265A17.15652,17.15652,0,0,0,598.54162,620.36961Z" transform="translate(-190 -87.41324)" fill="#3f3d56"/><ellipse cx="507.95028" cy="342.03939" rx="46.66488" ry="25.12724" fill="#2f2e41"/><circle cx="499.98867" cy="570.41763" r="10.83817" fill="#f2f2f2"/><path d="M984.98955,655.63467V779.40159c0,2.12642-1.14421,2.43-3.00378,3.4614-6.27425,3.47982-21.74,9.68029-40.30842-.13312-1.90605-1.00735-3.07953-1.34779-3.07953-3.50366V656.42769S962.1902,665.94394,984.98955,655.63467Z" transform="translate(-190 -87.41324)" fill="#2f2e41"/><ellipse cx="771.79369" cy="568.13844" rx="23.19586" ry="4.92606" fill="#3f3d56" stroke="#7323ff" stroke-miterlimit="10"/><g opacity="0.8"><circle cx="792.87703" cy="619.616" r="0.52042"/><circle cx="790.235" cy="620.35461" r="0.52042"/><circle cx="786.97082" cy="621.39545" r="0.52042"/><circle cx="781.11811" cy="622.65635" r="0.52042"/><circle cx="774.94755" cy="623.40347" r="0.52042"/><circle cx="768.55709" cy="623.69719" r="0.52042"/><circle cx="759.38428" cy="622.43629" r="0.52042"/><circle cx="762.42349" cy="623.17677" r="0.52042"/><circle cx="753.70675" cy="621.39545" r="0.52042"/><circle cx="756.44122" cy="621.91587" r="0.52042"/><circle cx="750.71034" cy="620.35461" r="0.52042"/><circle cx="783.98211" cy="622.13593" r="0.52042"/><circle cx="777.94379" cy="623.17677" r="0.52042"/><circle cx="771.39112" cy="623.69719" r="0.52042"/><circle cx="765.4304" cy="623.69719" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="622.17701" r="0.52042"/><circle cx="790.235" cy="622.91563" r="0.52042"/><circle cx="786.97082" cy="623.95647" r="0.52042"/><circle cx="781.11811" cy="625.21737" r="0.52042"/><circle cx="774.94755" cy="625.96449" r="0.52042"/><circle cx="768.55709" cy="626.25821" r="0.52042"/><circle cx="759.38428" cy="624.99731" r="0.52042"/><circle cx="762.42349" cy="625.73779" r="0.52042"/><circle cx="753.70675" cy="623.95647" r="0.52042"/><circle cx="756.44122" cy="624.47689" r="0.52042"/><circle cx="750.71034" cy="622.91563" r="0.52042"/><circle cx="783.98211" cy="624.69695" r="0.52042"/><circle cx="777.94379" cy="625.73779" r="0.52042"/><circle cx="771.39112" cy="626.25821" r="0.52042"/><circle cx="765.4304" cy="626.25821" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="624.73803" r="0.52042"/><circle cx="790.235" cy="625.47665" r="0.52042"/><circle cx="786.97082" cy="626.51749" r="0.52042"/><circle cx="781.11811" cy="627.77839" r="0.52042"/><circle cx="774.94755" cy="628.5255" r="0.52042"/><circle cx="768.55709" cy="628.81923" r="0.52042"/><circle cx="759.38428" cy="627.55833" r="0.52042"/><circle cx="762.42349" cy="628.29881" r="0.52042"/><circle cx="753.70675" cy="626.51749" r="0.52042"/><circle cx="756.44122" cy="627.03791" r="0.52042"/><circle cx="750.71034" cy="625.47665" r="0.52042"/><circle cx="783.98211" cy="627.25797" r="0.52042"/><circle cx="777.94379" cy="628.29881" r="0.52042"/><circle cx="771.39112" cy="628.81923" r="0.52042"/><circle cx="765.4304" cy="628.81923" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="627.29905" r="0.52042"/><circle cx="790.235" cy="628.03767" r="0.52042"/><circle cx="786.97082" cy="629.07851" r="0.52042"/><circle cx="781.11811" cy="630.3394" r="0.52042"/><circle cx="774.94755" cy="631.08652" r="0.52042"/><circle cx="768.55709" cy="631.38024" r="0.52042"/><circle cx="759.38428" cy="630.11935" r="0.52042"/><circle cx="762.42349" cy="630.85982" r="0.52042"/><circle cx="753.70675" cy="629.07851" r="0.52042"/><circle cx="756.44122" cy="629.59893" r="0.52042"/><circle cx="750.71034" cy="628.03767" r="0.52042"/><circle cx="783.98211" cy="629.81898" r="0.52042"/><circle cx="777.94379" cy="630.85982" r="0.52042"/><circle cx="771.39112" cy="631.38024" r="0.52042"/><circle cx="765.4304" cy="631.38024" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="629.86007" r="0.52042"/><circle cx="790.235" cy="630.59868" r="0.52042"/><circle cx="786.97082" cy="631.63952" r="0.52042"/><circle cx="781.11811" cy="632.90042" r="0.52042"/><circle cx="774.94755" cy="633.64754" r="0.52042"/><circle cx="768.55709" cy="633.94126" r="0.52042"/><circle cx="759.38428" cy="632.68036" r="0.52042"/><circle cx="762.42349" cy="633.42084" r="0.52042"/><circle cx="753.70675" cy="631.63952" r="0.52042"/><circle cx="756.44122" cy="632.15994" r="0.52042"/><circle cx="750.71034" cy="630.59868" r="0.52042"/><circle cx="783.98211" cy="632.38" r="0.52042"/><circle cx="777.94379" cy="633.42084" r="0.52042"/><circle cx="771.39112" cy="633.94126" r="0.52042"/><circle cx="765.4304" cy="633.94126" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="632.42108" r="0.52042"/><circle cx="790.235" cy="633.1597" r="0.52042"/><circle cx="786.97082" cy="634.20054" r="0.52042"/><circle cx="781.11811" cy="635.46144" r="0.52042"/><circle cx="774.94755" cy="636.20856" r="0.52042"/><circle cx="768.55709" cy="636.50228" r="0.52042"/><circle cx="759.38428" cy="635.24138" r="0.52042"/><circle cx="762.42349" cy="635.98186" r="0.52042"/><circle cx="753.70675" cy="634.20054" r="0.52042"/><circle cx="756.44122" cy="634.72096" r="0.52042"/><circle cx="750.71034" cy="633.1597" r="0.52042"/><circle cx="783.98211" cy="634.94102" r="0.52042"/><circle cx="777.94379" cy="635.98186" r="0.52042"/><circle cx="771.39112" cy="636.50228" r="0.52042"/><circle cx="765.4304" cy="636.50228" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="634.9821" r="0.52042"/><circle cx="790.235" cy="635.72072" r="0.52042"/><circle cx="786.97082" cy="636.76156" r="0.52042"/><circle cx="781.11811" cy="638.02246" r="0.52042"/><circle cx="774.94755" cy="638.76957" r="0.52042"/><circle cx="768.55709" cy="639.0633" r="0.52042"/><circle cx="759.38428" cy="637.8024" r="0.52042"/><circle cx="762.42349" cy="638.54288" r="0.52042"/><circle cx="753.70675" cy="636.76156" r="0.52042"/><circle cx="756.44122" cy="637.28198" r="0.52042"/><circle cx="750.71034" cy="635.72072" r="0.52042"/><circle cx="783.98211" cy="637.50204" r="0.52042"/><circle cx="777.94379" cy="638.54288" r="0.52042"/><circle cx="771.39112" cy="639.0633" r="0.52042"/><circle cx="765.4304" cy="639.0633" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="637.54312" r="0.52042"/><circle cx="790.235" cy="638.28174" r="0.52042"/><circle cx="786.97082" cy="639.32258" r="0.52042"/><circle cx="781.11811" cy="640.58347" r="0.52042"/><circle cx="774.94755" cy="641.33059" r="0.52042"/><circle cx="768.55709" cy="641.62431" r="0.52042"/><circle cx="759.38428" cy="640.36342" r="0.52042"/><circle cx="762.42349" cy="641.10389" r="0.52042"/><circle cx="753.70675" cy="639.32258" r="0.52042"/><circle cx="756.44122" cy="639.843" r="0.52042"/><circle cx="750.71034" cy="638.28174" r="0.52042"/><circle cx="783.98211" cy="640.06305" r="0.52042"/><circle cx="777.94379" cy="641.10389" r="0.52042"/><circle cx="771.39112" cy="641.62431" r="0.52042"/><circle cx="765.4304" cy="641.62431" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="640.10414" r="0.52042"/><circle cx="790.235" cy="640.84275" r="0.52042"/><circle cx="786.97082" cy="641.88359" r="0.52042"/><circle cx="781.11811" cy="643.14449" r="0.52042"/><circle cx="774.94755" cy="643.89161" r="0.52042"/><circle cx="768.55709" cy="644.18533" r="0.52042"/><circle cx="759.38428" cy="642.92443" r="0.52042"/><circle cx="762.42349" cy="643.66491" r="0.52042"/><circle cx="753.70675" cy="641.88359" r="0.52042"/><circle cx="756.44122" cy="642.40401" r="0.52042"/><circle cx="750.71034" cy="640.84275" r="0.52042"/><circle cx="783.98211" cy="642.62407" r="0.52042"/><circle cx="777.94379" cy="643.66491" r="0.52042"/><circle cx="771.39112" cy="644.18533" r="0.52042"/><circle cx="765.4304" cy="644.18533" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="642.66515" r="0.52042"/><circle cx="790.235" cy="643.40377" r="0.52042"/><circle cx="786.97082" cy="644.44461" r="0.52042"/><circle cx="781.11811" cy="645.70551" r="0.52042"/><circle cx="774.94755" cy="646.45263" r="0.52042"/><circle cx="768.55709" cy="646.74635" r="0.52042"/><circle cx="759.38428" cy="645.48545" r="0.52042"/><circle cx="762.42349" cy="646.22593" r="0.52042"/><circle cx="753.70675" cy="644.44461" r="0.52042"/><circle cx="756.44122" cy="644.96503" r="0.52042"/><circle cx="750.71034" cy="643.40377" r="0.52042"/><circle cx="783.98211" cy="645.18509" r="0.52042"/><circle cx="777.94379" cy="646.22593" r="0.52042"/><circle cx="771.39112" cy="646.74635" r="0.52042"/><circle cx="765.4304" cy="646.74635" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="645.22617" r="0.52042"/><circle cx="790.235" cy="645.96479" r="0.52042"/><circle cx="786.97082" cy="647.00563" r="0.52042"/><circle cx="781.11811" cy="648.26653" r="0.52042"/><circle cx="774.94755" cy="649.01364" r="0.52042"/><circle cx="768.55709" cy="649.30737" r="0.52042"/><circle cx="759.38428" cy="648.04647" r="0.52042"/><circle cx="762.42349" cy="648.78695" r="0.52042"/><circle cx="753.70675" cy="647.00563" r="0.52042"/><circle cx="756.44122" cy="647.52605" r="0.52042"/><circle cx="750.71034" cy="645.96479" r="0.52042"/><circle cx="783.98211" cy="647.74611" r="0.52042"/><circle cx="777.94379" cy="648.78695" r="0.52042"/><circle cx="771.39112" cy="649.30737" r="0.52042"/><circle cx="765.4304" cy="649.30737" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="647.78719" r="0.52042"/><circle cx="790.235" cy="648.52581" r="0.52042"/><circle cx="786.97082" cy="649.56665" r="0.52042"/><circle cx="781.11811" cy="650.82754" r="0.52042"/><circle cx="774.94755" cy="651.57466" r="0.52042"/><circle cx="768.55709" cy="651.86838" r="0.52042"/><circle cx="759.38428" cy="650.60749" r="0.52042"/><circle cx="762.42349" cy="651.34796" r="0.52042"/><circle cx="753.70675" cy="649.56665" r="0.52042"/><circle cx="756.44122" cy="650.08707" r="0.52042"/><circle cx="750.71034" cy="648.52581" r="0.52042"/><circle cx="783.98211" cy="650.30712" r="0.52042"/><circle cx="777.94379" cy="651.34796" r="0.52042"/><circle cx="771.39112" cy="651.86838" r="0.52042"/><circle cx="765.4304" cy="651.86838" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="650.34821" r="0.52042"/><circle cx="790.235" cy="651.08682" r="0.52042"/><circle cx="786.97082" cy="652.12766" r="0.52042"/><circle cx="781.11811" cy="653.38856" r="0.52042"/><circle cx="774.94755" cy="654.13568" r="0.52042"/><circle cx="768.55709" cy="654.4294" r="0.52042"/><circle cx="759.38428" cy="653.1685" r="0.52042"/><circle cx="762.42349" cy="653.90898" r="0.52042"/><circle cx="753.70675" cy="652.12766" r="0.52042"/><circle cx="756.44122" cy="652.64808" r="0.52042"/><circle cx="750.71034" cy="651.08682" r="0.52042"/><circle cx="783.98211" cy="652.86814" r="0.52042"/><circle cx="777.94379" cy="653.90898" r="0.52042"/><circle cx="771.39112" cy="654.4294" r="0.52042"/><circle cx="765.4304" cy="654.4294" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="652.90922" r="0.52042"/><circle cx="790.235" cy="653.64784" r="0.52042"/><circle cx="786.97082" cy="654.68868" r="0.52042"/><circle cx="781.11811" cy="655.94958" r="0.52042"/><circle cx="774.94755" cy="656.6967" r="0.52042"/><circle cx="768.55709" cy="656.99042" r="0.52042"/><circle cx="759.38428" cy="655.72952" r="0.52042"/><circle cx="762.42349" cy="656.47" r="0.52042"/><circle cx="753.70675" cy="654.68868" r="0.52042"/><circle cx="756.44122" cy="655.2091" r="0.52042"/><circle cx="750.71034" cy="653.64784" r="0.52042"/><circle cx="783.98211" cy="655.42916" r="0.52042"/><circle cx="777.94379" cy="656.47" r="0.52042"/><circle cx="771.39112" cy="656.99042" r="0.52042"/><circle cx="765.4304" cy="656.99042" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="655.47024" r="0.52042"/><circle cx="790.235" cy="656.20886" r="0.52042"/><circle cx="786.97082" cy="657.2497" r="0.52042"/><circle cx="781.11811" cy="658.5106" r="0.52042"/><circle cx="774.94755" cy="659.25771" r="0.52042"/><circle cx="768.55709" cy="659.55144" r="0.52042"/><circle cx="759.38428" cy="658.29054" r="0.52042"/><circle cx="762.42349" cy="659.03102" r="0.52042"/><circle cx="753.70675" cy="657.2497" r="0.52042"/><circle cx="756.44122" cy="657.77012" r="0.52042"/><circle cx="750.71034" cy="656.20886" r="0.52042"/><circle cx="783.98211" cy="657.99018" r="0.52042"/><circle cx="777.94379" cy="659.03102" r="0.52042"/><circle cx="771.39112" cy="659.55144" r="0.52042"/><circle cx="765.4304" cy="659.55144" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="658.03126" r="0.52042"/><circle cx="790.235" cy="658.76987" r="0.52042"/><circle cx="786.97082" cy="659.81071" r="0.52042"/><circle cx="781.11811" cy="661.07161" r="0.52042"/><circle cx="774.94755" cy="661.81873" r="0.52042"/><circle cx="768.55709" cy="662.11245" r="0.52042"/><circle cx="759.38428" cy="660.85155" r="0.52042"/><circle cx="762.42349" cy="661.59203" r="0.52042"/><circle cx="753.70675" cy="659.81071" r="0.52042"/><circle cx="756.44122" cy="660.33113" r="0.52042"/><circle cx="750.71034" cy="658.76987" r="0.52042"/><circle cx="783.98211" cy="660.55119" r="0.52042"/><circle cx="777.94379" cy="661.59203" r="0.52042"/><circle cx="771.39112" cy="662.11245" r="0.52042"/><circle cx="765.4304" cy="662.11245" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="660.59228" r="0.52042"/><circle cx="790.235" cy="661.33089" r="0.52042"/><circle cx="786.97082" cy="662.37173" r="0.52042"/><circle cx="781.11811" cy="663.63263" r="0.52042"/><circle cx="774.94755" cy="664.37975" r="0.52042"/><circle cx="768.55709" cy="664.67347" r="0.52042"/><circle cx="759.38428" cy="663.41257" r="0.52042"/><circle cx="762.42349" cy="664.15305" r="0.52042"/><circle cx="753.70675" cy="662.37173" r="0.52042"/><circle cx="756.44122" cy="662.89215" r="0.52042"/><circle cx="750.71034" cy="661.33089" r="0.52042"/><circle cx="783.98211" cy="663.11221" r="0.52042"/><circle cx="777.94379" cy="664.15305" r="0.52042"/><circle cx="771.39112" cy="664.67347" r="0.52042"/><circle cx="765.4304" cy="664.67347" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="663.15329" r="0.52042"/><circle cx="790.235" cy="663.89191" r="0.52042"/><circle cx="786.97082" cy="664.93275" r="0.52042"/><circle cx="781.11811" cy="666.19365" r="0.52042"/><circle cx="774.94755" cy="666.94077" r="0.52042"/><circle cx="768.55709" cy="667.23449" r="0.52042"/><circle cx="759.38428" cy="665.97359" r="0.52042"/><circle cx="762.42349" cy="666.71407" r="0.52042"/><circle cx="753.70675" cy="664.93275" r="0.52042"/><circle cx="756.44122" cy="665.45317" r="0.52042"/><circle cx="750.71034" cy="663.89191" r="0.52042"/><circle cx="783.98211" cy="665.67323" r="0.52042"/><circle cx="777.94379" cy="666.71407" r="0.52042"/><circle cx="771.39112" cy="667.23449" r="0.52042"/><circle cx="765.4304" cy="667.23449" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="665.71431" r="0.52042"/><circle cx="790.235" cy="666.45293" r="0.52042"/><circle cx="786.97082" cy="667.49377" r="0.52042"/><circle cx="781.11811" cy="668.75467" r="0.52042"/><circle cx="774.94755" cy="669.50178" r="0.52042"/><circle cx="768.55709" cy="669.79551" r="0.52042"/><circle cx="759.38428" cy="668.53461" r="0.52042"/><circle cx="762.42349" cy="669.27509" r="0.52042"/><circle cx="753.70675" cy="667.49377" r="0.52042"/><circle cx="756.44122" cy="668.01419" r="0.52042"/><circle cx="750.71034" cy="666.45293" r="0.52042"/><circle cx="783.98211" cy="668.23425" r="0.52042"/><circle cx="777.94379" cy="669.27509" r="0.52042"/><circle cx="771.39112" cy="669.79551" r="0.52042"/><circle cx="765.4304" cy="669.79551" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="668.27533" r="0.52042"/><circle cx="790.235" cy="669.01394" r="0.52042"/><circle cx="786.97082" cy="670.05478" r="0.52042"/><circle cx="781.11811" cy="671.31568" r="0.52042"/><circle cx="774.94755" cy="672.0628" r="0.52042"/><circle cx="768.55709" cy="672.35652" r="0.52042"/><circle cx="759.38428" cy="671.09562" r="0.52042"/><circle cx="762.42349" cy="671.8361" r="0.52042"/><circle cx="753.70675" cy="670.05478" r="0.52042"/><circle cx="756.44122" cy="670.5752" r="0.52042"/><circle cx="750.71034" cy="669.01394" r="0.52042"/><circle cx="783.98211" cy="670.79526" r="0.52042"/><circle cx="777.94379" cy="671.8361" r="0.52042"/><circle cx="771.39112" cy="672.35652" r="0.52042"/><circle cx="765.4304" cy="672.35652" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="670.83635" r="0.52042"/><circle cx="790.235" cy="671.57496" r="0.52042"/><circle cx="786.97082" cy="672.6158" r="0.52042"/><circle cx="781.11811" cy="673.8767" r="0.52042"/><circle cx="774.94755" cy="674.62382" r="0.52042"/><circle cx="768.55709" cy="674.91754" r="0.52042"/><circle cx="759.38428" cy="673.65664" r="0.52042"/><circle cx="762.42349" cy="674.39712" r="0.52042"/><circle cx="753.70675" cy="672.6158" r="0.52042"/><circle cx="756.44122" cy="673.13622" r="0.52042"/><circle cx="750.71034" cy="671.57496" r="0.52042"/><circle cx="783.98211" cy="673.35628" r="0.52042"/><circle cx="777.94379" cy="674.39712" r="0.52042"/><circle cx="771.39112" cy="674.91754" r="0.52042"/><circle cx="765.4304" cy="674.91754" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="673.39736" r="0.52042"/><circle cx="790.235" cy="674.13598" r="0.52042"/><circle cx="786.97082" cy="675.17682" r="0.52042"/><circle cx="781.11811" cy="676.43772" r="0.52042"/><circle cx="774.94755" cy="677.18483" r="0.52042"/><circle cx="768.55709" cy="677.47856" r="0.52042"/><circle cx="759.38428" cy="676.21766" r="0.52042"/><circle cx="762.42349" cy="676.95814" r="0.52042"/><circle cx="753.70675" cy="675.17682" r="0.52042"/><circle cx="756.44122" cy="675.69724" r="0.52042"/><circle cx="750.71034" cy="674.13598" r="0.52042"/><circle cx="783.98211" cy="675.9173" r="0.52042"/><circle cx="777.94379" cy="676.95814" r="0.52042"/><circle cx="771.39112" cy="677.47856" r="0.52042"/><circle cx="765.4304" cy="677.47856" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="675.95838" r="0.52042"/><circle cx="790.235" cy="676.697" r="0.52042"/><circle cx="786.97082" cy="677.73784" r="0.52042"/><circle cx="781.11811" cy="678.99874" r="0.52042"/><circle cx="774.94755" cy="679.74585" r="0.52042"/><circle cx="768.55709" cy="680.03958" r="0.52042"/><circle cx="759.38428" cy="678.77868" r="0.52042"/><circle cx="762.42349" cy="679.51916" r="0.52042"/><circle cx="753.70675" cy="677.73784" r="0.52042"/><circle cx="756.44122" cy="678.25826" r="0.52042"/><circle cx="750.71034" cy="676.697" r="0.52042"/><circle cx="783.98211" cy="678.47832" r="0.52042"/><circle cx="777.94379" cy="679.51916" r="0.52042"/><circle cx="771.39112" cy="680.03958" r="0.52042"/><circle cx="765.4304" cy="680.03958" r="0.52042"/></g><g opacity="0.8"><circle cx="792.87703" cy="678.5194" r="0.52042"/><circle cx="790.235" cy="679.25801" r="0.52042"/><circle cx="786.97082" cy="680.29885" r="0.52042"/><circle cx="781.11811" cy="681.55975" r="0.52042"/><circle cx="774.94755" cy="682.30687" r="0.52042"/><circle cx="768.55709" cy="682.60059" r="0.52042"/><circle cx="759.38428" cy="681.33969" r="0.52042"/><circle cx="762.42349" cy="682.08017" r="0.52042"/><circle cx="753.70675" cy="680.29885" r="0.52042"/><circle cx="756.44122" cy="680.81927" r="0.52042"/><circle cx="750.71034" cy="679.25801" r="0.52042"/><circle cx="783.98211" cy="681.03933" r="0.52042"/><circle cx="777.94379" cy="682.08017" r="0.52042"/><circle cx="771.39112" cy="682.60059" r="0.52042"/><circle cx="765.4304" cy="682.60059" r="0.52042"/></g></svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>admin/js/sb-admin-2.min.js"></script>

</body>

</html>