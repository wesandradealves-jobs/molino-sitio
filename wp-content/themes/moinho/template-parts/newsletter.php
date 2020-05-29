        <!-- newsletter -->
        <section class="newsletter">
          <div class="container">
            <h2>Quer receber nossos produtos orgânicos na sua casa? <small><?php echo (isset($_GET['newsletter']) && $_GET['newsletter'] === '1') ?  'Enviado com sucesso' : ''; ?></small></h2>
            <form action="<?php the_permalink(); ?>" method="POST">
              <div class="form-group">
                <p>Entre em contato conosco!</p>
                <div class="custom-checkbox">
                  <div class="input">
                    <input required="required" type="radio" name="pessoa" value="Pessoa Física">
                    <label for="pessoa"></label>                    
                  </div>
                  <label for="pessoa">Pessoa Física</label>
                </div>
                <div class="custom-checkbox">
                  <div class="input">
                    <input required="required" type="radio" name="pessoa" value="Pessoa Jurídica">
                    <label for="pessoa"></label>                    
                  </div>
                  <label for="pessoa">Pessoa Jurídica</label>
                </div>                
              </div>
              <div class="form-group">
                <label for="Nome">Nome:</label>
                <input required="required" type="text" name="nome">
              </div>
              <div class="form-group">
                <label for="Email">Email:</label>
                <input required="required" type="email" name="email">
              </div>    
              <div class="form-group">
                <button class="btn btn-2">Enviar</button>
              </div>
              <input type="hidden" name="newsletter" value="true" />
            </form>
          </div>
        </section>
        <style>
          .newsletter .container form>div:last-of-type {
            padding-right: 0;
            flex: 0 0 auto;
            justify-self: flex-end;
            align-self: flex-end;            
          }
          .newsletter .container form>div:last-of-type .btn {
            line-height: 1.9;
            width: 110px;
          }
          .newsletter h2 small {
            display: block;
            font-size: 60%;
            margin: 15px 0 0;
            text-align: center;
            color: green;
            font-weight: bold;            
          }
        </style>