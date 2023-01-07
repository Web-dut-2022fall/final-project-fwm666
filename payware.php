<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="log.css">
 
    <title>嗨购</title>
</head>
<body>
    <section>
        <!-- 背景颜色 -->
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <!-- 背景圆 -->
            <div class="circle" style="--x:0"></div>
            <div class="circle" style="--x:1"></div>
            <div class="circle" style="--x:2"></div>
            <div class="circle" style="--x:3"></div>
            <div class="circle" style="--x:4"></div>
            <div class="circle" style="--x:5"></div>  
            <div class="circle" style="--x:6"></div>         
            <!-- 登录框 -->
            <div class="container">
                <div class="form">
            <div class="bottom-text footer-columns">
<h2><?php 
    echo '<span style="font-size: 32px">
 </span>'.$_POST["username"];?></h2>
                    <h2>小王子</h2>
                    <h1>   ——不只是给孩子的童话</h1>
                    <h2></h2>
                    <div class="inputBox">
                        <img src="https://img1.baidu.com/it/u=358430701,3982842949&fm=26&fmt=auto&gp=0.jpg" width=100% height=10%/>
                        <h2></h2>
                        <div style="width:50%;padding:0;margin:0;float:left;box-sizing:border-box;" class="inputBox">
                            <form method="link" action="weixin.html" target="_blank"  >
                            <input type="submit" id="submit_form" value="微信"  >
                            </form>
                        </div>

                        <div style="width:50%;padding:0;margin:0;float:left;box-sizing:border-box;" class="inputBox">
                            <form method="link" action="zhifubao.html" target="_blank"  >
                            <input type="submit" id="submit_form" value="支付宝"  >
                            </form>
                        </div>
                      </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
 
</html>