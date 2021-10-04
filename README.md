You can test this website here - [https://chizlife.ru/](https://chizlife.ru/)
=============================================================================

### Public API 

### GET api/products - Get all products from database, limit 1000, default status\_id=1, optional filters

### GET api/products/{product} - Get selected product

### GET api/register - Register New user and get api token. Required name, email, password
###
### Private API - pass your token as a bearer token in request
###

### POST api/products - Add new product to database. Required: name, price, status\_id, external\_id.

### PUT api/products/{product} - Update selected product. Required: name, price, status\_id, external\_id.

### DELETE api/products/{product} - Delete selected product. Required: name, price, status\_id, external\_id.
