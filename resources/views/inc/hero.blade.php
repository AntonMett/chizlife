<div class="jumbotron">
    <div class="container text-center">
        <h1>Hello Everyone!</h1>
        <p>This is my Laravel testing and learning website! Feel free to test out Contact page,
            be sure to fill out form correctly or
            you will be given some alert messages ;) After you submit your contact request your message will be stored
            in my database and will be visible in All Contact Messages page. There You can Update or Delete your
            messages from database.<br>
        <h2>Public API</h2><br>
        GET api/products - Get all products from database, limit 1000, default status_id=1, optional filters
        (price_start-price_end, date_from, date_to, skip)<br>
        GET api/products/{product} - Get selected product<br>
        GET api/register - Register New user and get api token. Required name, email, password<br><br>
        <h3>Private API - pass your token as a bearer token in request</h3><br>
        POST api/products - Add new product to database. Required: name, price, status_id, external_id.<br>
        PUT api/products/{product} - Update selected product. Required: name, price, status_id, external_id.<br>
        DELETE api/products/{product} - Delete selected product. Required: name, price, status_id, external_id.<br><br>

        <div class="d-flex justify-content-center ">
            <a href="https://github.com/AntonMett/chizlife" target="_blank">
                <button
                    class="btn btn-info">CHECK CODE ON GITHUB
                </button>
            </a>
        </div>
        </p>
    </div>
</div>
php
