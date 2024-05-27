
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .container {
        max-width: 960px;
      }
    </style>
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Checkout</h2>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Seu Carrinho</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Produto 1</h6>
              <small class="text-muted">Lorem Ipsum is simply dummy text of</small>
            </div>
            <span class="text-muted">R$ 12,00</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Produto 2</h6>
              <small class="text-muted">Lorem Ipsum is simply dummy text of</small>
            </div>
            <span class="text-muted">R$ 8,00</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Produto 3</h6>
              <small class="text-muted">Lorem Ipsum is simply dummy text of</small>
            </div>
            <span class="text-muted">R$ 5,00</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Cupom de Desconto</h6>
              <small>CUPOMTESTE</small>
            </div>
            <span class="text-success">−R$ 5,00</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total</span>
            <strong id="strong-value">R$ 20,00</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Add Cupom</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Dados para Pagamento e Entrega</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="name" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" id="name" placeholder="" value="Fulano de Tal da Silva" required>
              <div class="invalid-feedback">
                Informe seu nome completo.
              </div>
            </div>

            <div class="col-4">
              <label for="cpf" class="form-label">CPF</label>
              <input type="text" class="form-control" id="cpf" placeholder="065.924.967-35" value="764.662.960-08">
              <div class="invalid-feedback">
                Insira um endereço de e-mail válido.
              </div>
            </div>
            <div class="col-4">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="fulano@example.com" value="fulano@gmail.com" required>
              <div class="invalid-feedback">
                Insira um endereço de e-mail válido.
              </div>
            </div>
            <div class="col-4">
              <label for="phone" class="form-label">Telefone</label>
              <input type="text" class="form-control" id="phone" placeholder="(00) 0 0000-0000" value="(83) 9 8167-0095" required>
              <div class="invalid-feedback">
                Insira um endereço de e-mail válido.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="address" placeholder="" value="Rua Teste" required>
              <div class="invalid-feedback">
                Informe seu endereço de entrega.
              </div>
            </div>

            <div class="col-md-6">
              <label for="number" class="form-label">Número</label>
                <input type="text" class="form-control" id="number" placeholder="" value="1001" required>
                <div class="invalid-feedback">
                  Informe o número.
                </div>
            </div>

            <div class="col-md-6">
              <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" placeholder="" value="Bairro Teste" required>
                <div class="invalid-feedback">
                  Informe o bairro.
                </div>
            </div>

            <div class="col-md-6">
              <label for="city" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="city" placeholder="" value="Cidade Teste" required>
                <div class="invalid-feedback">
                  Informe a cidade.
                </div>
            </div>

            <div class="col-md-6">
              <label for="state" class="form-label">Estado</label>
                <input type="text" class="form-control" id="state" placeholder="" value="Paraíba" required>
                <div class="invalid-feedback">
                  Informe o estado.
                </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">CEP</label>
              <input type="text" class="form-control" id="zip" placeholder="" value="62552-800" required>
              <div class="invalid-feedback">
                Informe o CEP.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Forma de pagamento</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="boleto" name="paymentMethod" onclick="showInputCards(this)" type="radio" class="form-check-input" value="boleto" checked required>
              <label class="form-check-label" for="boleto">Boleto</label>
            </div>
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" onclick="showInputCards(this)" class="form-check-input" value="credit_card" required>
              <label class="form-check-label" for="credit">Crédito</label>
            </div>
            <div class="form-check">
              <input id="pix" name="paymentMethod" type="radio" onclick="showInputCards(this)" class="form-check-input" value="pix" required>
              <label class="form-check-label" for="pix">Pix</label>
            </div>
          </div>

          <div class="row gy-3" id="data-credit-card" style="display: none;">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nome no Cartão</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" value="Fulano Silva" required>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Número do Cartão</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" value="5517441878187443" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Validade</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" value="01/2025" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">Código</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" value="282" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button id="payment-submit" class="w-100 btn btn-primary btn-lg" type="submit">Finalizar</button>
        </form>
      </div>
    </div>

    <div class="modal fade" data-bs-backdrop="static" id="payment-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Obrigado por comprar com a gente!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <center id="modal-center">
                <img id="modal-image" src="{{asset('success.png')}}" alt="" style="width: 20%; height: 20%;">
            </center>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="location.reload()">Sair</button>
        </div>
        </div>
    </div>
    </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2024 Teste Perfect Pay</p>
    <!-- <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul> -->
  </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.es.gov.br/scripts/jquery/jquery-mask/1.7.7/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>
        var forms = document.querySelectorAll('.needs-validation')
        
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault()
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    payment()
                }
                payment()
                form.classList.add('was-validated')
            }, false)
            })
console.log(peyload())

        function peyload(){
            let billingType = $('input[type=radio]:checked').val().toUpperCase()
            let creditCardInfo = {}
            let paymentInfo = {
                'billingType': billingType,
                'value': parseFloat($('#strong-value').text().replace('R$ ', '').replace(',', '.')),
            }

            if(billingType == 'CREDIT_CARD'){
                creditCardInfo = {
                    "holderName": $('#cc-name').val(),
                    "number": $('#cc-number').val(),
                    "expiryMonth": $('#cc-expiration').val().split('/')[0],
                    "expiryYear": $('#cc-expiration').val().split('/')[1],
                    "cvv": $('#cc-cvv').val()
                }
            }
            
            return {
                '_token': "{{csrf_token()}}",
                'name': $('#name').val(),
                'cpfCnpj': $('#cpf').val(),
                'mobilePhone': $('#phone').val(),
                'email': $('#email').val(),
                'address': {
                    'address': $('#address').val(),
                    'number': $('#number').val(),
                    'neighborhood': $('#neighborhood').val(),
                    'city': $('#city').val(),
                    'state': $('#state').val(),
                    'zipcode': $('#zip').val(),
                },
                'paymentInfo': paymentInfo,
                'creditCardInfo': creditCardInfo,
            }
        }

        function showInputCards(input)
        {
            if($(input).val() == 'credit_card'){
                $('#data-credit-card').show(500);
            }else{
                $('#data-credit-card').hide(500);
            }
        }

        $(document).ready(function(){
            $('#cc-expiration').mask('00/0000');
            $('#cc-number').mask('0000 0000 0000 0000');
            $('#cpf').mask('000.000.000-00', {reverse: true});
            $('#phone').mask('(00) 0 0000-0000');
            $('#zip').mask('00000-000', {reverse: true});
        });
            
        async function payment(){
            let url = "{{route('checkout.payment')}}";

            let response = await axios.post(url, peyload()) .then(function (response) {
                if(response.status == 200 || response.status == 201){
                    var modal = new bootstrap.Modal(document.getElementById('payment-modal'), {
                            keyboard: false
                        })

                    

                    if(peyload().paymentInfo.billingType == 'CREDIT_CARD'){

                        $('.modal-footer').append('<a class="btn btn-primary" href="'+response.data.data.transactionReceiptUrl+'" target="_blank">Ver comprovante</a>')
                    }

                    if(peyload().paymentInfo.billingType == 'BOLETO'){
                        let preview = 'https://sandbox.asaas.com/b/preview/'+response.data.data.id.replace('pay_', '')+'?isAbTestBankSlipPreview=true'
                        $('.modal-footer').append('<a class="btn btn-primary" href="'+preview+'" target="_blank">Ver boleto</a>')
                    }

                    if(peyload().paymentInfo.billingType == 'PIX'){
                        $('#modal-image').attr('src', 'data:image/png;base64,'+response.data.data.encodedImage)
                        // let preview = 'https://sandbox.asaas.com/b/preview/'+response.data.data.id.replace('pay_', '')+'?isAbTestBankSlipPreview=true'
                        // $('#modal-center').append('<br><span id="qr-code-text" class="text-break text-secondary mt-3">'+response.data.data.payload+'</span>')
                        $('#modal-center').append('<br><input id="qr-code-text" class="form-control" type="text" placeholder="Disabled input" value="'+response.data.data.payload+'" aria-label="Disabled input example" disabled>')
                        $('.modal-footer').append('<a id="btn-submit" class="btn btn-primary">Copiar Qrcode</a>')

                        document.getElementById('btn-submit').addEventListener('click', () => {
                                const textInput = document.getElementById('qr-code-text');
                                textInput.select();
                                textInput.setSelectionRange(0, 99999); // For mobile devices

                                try {
                                    document.execCommand('copy');
                                    alert('Qrcode copiado!');
                                } catch (err) {
                                    alert('Erro ao copiar Qrcode: ' + err);
                                }
                            });
                    }


                    modal.show()
                }
            }).catch(function (error) {
                console.log('Entrou no catch: ');
                console.log(error);
                // console.log(error.response.data);
                $.toast({
                    heading: 'Falha ao efetuar pagamento',
                    text: error.response.data.message,
                    icon: 'error',
                    loader: true,        // Change it to false to disable loader
                    position: 'bottom-right',
                })
                return
            })
            
            console.log('RESPONSE: ');
            console.log(response);
        }

        
        
      </script>
  </body>
</html>
