<div class="container-fluid py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h6 class="text-primary text-uppercase font-weight-bold">Contacta con nosotros</h6>
                <h1 class="mb-4">Contacto Para Cualquier Consulta</h1>
                <div class="contact-form bg-secondary" style="padding: 30px;">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="name" placeholder="Nombre Completo" required="required" data-validation-required-message="Por favor, escriba su nombre" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control border-0 p-4" id="email" placeholder="Correo Eléctronico" required="required" data-validation-required-message="Por favor introduzca su correo electrónico" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="Objetivo" placeholder="Subject" required="required" data-validation-required-message="Por favor ingrese un asunto" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Por favor ingrese su mensaje"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>