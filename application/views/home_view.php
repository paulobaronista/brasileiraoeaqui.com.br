<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <img class="img-responsive center-block logo" src="<?= base_url(); ?>assets/images/logo-brasileirao.png" alt="Brasileirão 2020">
        </div>
    </div>
</div>

<div class="container video">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 box-1">
            <p class="txt-1">Só quem é torcedor sabe!</p>
            <p class="txt-2">Só quem é anunciante vibra!</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 box-2">
            <p class="txt-1">
                SÓ QUEM GOSTA DE<br>
                <strong>RESULTADOS</strong> VAI FAZER<br>
                PARTE DESSE SHOW!
            </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 box-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JPauSo5bda0"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="container em2019">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <p class="txt-1">
                em
            </p>
            <p class="txt-2">
                2019
            </p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <p class="txt-3">
                A MAIOR AUDIÊNCIA<br>
                DE UM JOGO DO BRASILEIRÃO<br>
                NA PAY TV É DA TNT:
            </p>
        </div>
    </div>
</div>

<div class="container info-2019">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <p class="txt-01">EM 2019 A <span>MAIOR AUDIÊNCIA</span> DE UM JOGO<br>
                DO BRASILEIRÃO NA PAY TV É DA <span>TNT:</span></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <div class="box-1">
                <p class="txt-02">palmeiras x internacional</p>
                <p class="txt-03">5,61</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <p class="txt-04"><span>3 DOS 5 JOGOS MAIS ASSISTIDOS</span><br>
                FORAM TRANSMITIDOS NA <span>TNT</span></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box-2">
                <div class="col-xs-12 col-sm-4 col-md-4 padding-off text-center">
                    <p class="txt-02">palmeiras x internacional</p>
                    <p class="txt-03">5,61</p>
                </div>
                <div class="col-xs-12 visible-xs margin-top-20"></div>
                <div class="col-xs-12 col-sm-4 col-md-4 padding-off text-center">
                    <p class="txt-02">athletico pr x palmeiras</p>
                    <p class="txt-03">5,27</p>
                </div>
                <div class="col-xs-12 visible-xs margin-top-20"></div>
                <div class="col-xs-12 col-sm-4 col-md-4 padding-off text-center">
                    <p class="txt-02">palmeiras x santos</p>
                    <p class="txt-03">5,26</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <p class="txt-05">
                Fonte: Kantar IBOPE Media Brasil. 15 Mercados. 27/04/2019 a 08/12/2019. FUT CAMP BRASILEIRO VIVO. Rat%. Base com TV Paga. Total de domicílios (10.179.700)
            </p>
        </div>
    </div>
</div>

<div class="container em2020">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <p class="txt-1">
                em
            </p>
            <p class="txt-2">
                2020
            </p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <p class="txt-3">
                A AUDIÊNCIA<br>
                JÁ COMEÇOU COM TUDO.
            </p>
        </div>
    </div>
</div>

































<div class="col-xs-12 col-sm-12 col-md-12">
    <form method="post" role="form" action="<?php echo base_url("contato") ?>">
        <span class="tt-form text-center">
            <p>Preencha os dados abaixo para<br /> um atendimento personalizado!</p>
        </span>
        <div class="group-form">
            <div class="form-group">
                <label for="nome">Nome*</label>
                <input id="nome" type="text" class="nome form-control" name="nome" required="required" />
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input id="email" type="email" class="email form-control" name="email" required="required" />
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input id="telefone" class="phone form-control" type="tel" name="phone" />
            </div>
            <div class="form-group">
                <label for="form-mensagem">Mensagem</label>
                <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss"></textarea>
            </div>
            <button type="submit" class="btn_enviar enviar btn center-block" title="enviar" name="enviar_email" value="enviar">Enviar</button>
        </div>
    </form>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 text-center padding-off">
                <p>COPYRIGHT © - TODOS OS DIREITOS RESERVADOS </p>
            </div>
        </div>
    </div>
</footer>

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>