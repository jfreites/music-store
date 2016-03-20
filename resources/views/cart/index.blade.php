@extends('layout')

@section('content')

    <script src="https://code.jquery.com/jquery-1.12.2.min.js" integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function () {
            // Document.ready -> link up remove event handler
            $(".RemoveLink").click(function () {
                // Get the id from the link
                var recordToDelete = $(this).attr("data-id");

                if (recordToDelete !== '') {

                    // Perform the ajax post
                    $.post("/cart/remove", { "id": recordToDelete },
                        function (data) {
                            // Successful requests get here
                            // Update the page elements
                            if (data.ItemCount === 0) {
                                $('#row-' + data.DeleteId).fadeOut('slow');
                            } else {
                                $('#item-count-' + data.DeleteId).text(data.ItemCount);
                            }

                            $('#cart-total').text(data.CartTotal);
                            $('#update-message').text(data.Message);
                            $('#cart-status').text('Cart (' + data.CartCount + ')');
                        });
                }
            });

        });


        function handleUpdate() {
            // Load and deserialize the returned JSON data
            var json = context.get_data();
            var data = Sys.Serialization.JavaScriptSerializer.deserialize(json);

            // Update the page elements
            if (data.ItemCount === 0) {
                $('#row-' + data.DeleteId).fadeOut('slow');
            } else {
                $('#item-count-' + data.DeleteId).text(data.ItemCount);
            }

            $('#cart-total').text(data.CartTotal);
            $('#update-message').text(data.Message);
            $('#cart-status').text('Cart (' + data.CartCount + ')');
        }
    </script>
    <h3>
        <em>Revisa</em> tu carrito:
    </h3>
    <p class="button">
        <a href="#">Checkout</a>
    </p>
    <div id="update-message">
    </div>
    <table>
        <tr>
            <th>
                Nombre del album
            </th>
            <th>
                Precio (individual)
            </th>
            <th>
                Cantidad
            </th>
            <th></th>
        </tr>
        @foreach ($cartData as $item)
            <tr id="row-<?= $item['id'] ?>">
                <td>
                    <a href="/store/details/<?= $item['id'] ?>"><?= $item['title'] ?></a>
                </td>
                <td>
                    <?= $item['price'] ?>
                </td>
                <td id="item-count-<?= $item['id'] ?>">
                    <?= $item['quantity'] ?>
                </td>
                <td>
                    <a href="#" class="RemoveLink" data-id="<?= $item['id'] ?>">Quitar del carrito</a>
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
                Total
            </td>
            <td>
            </td>
            <td>
            </td>
            <td id="cart-total">
                <strong>{{ $total }}</strong>
            </td>
        </tr>
    </table>

@endsection