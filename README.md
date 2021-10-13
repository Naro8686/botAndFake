## Using API

##### All requests must contain ``Authorization: Bearer <token>``.
###### Fields with an `*` are required.
#
| Description | Method | Url | Params | Return |
| :------ | :------ | :------ | :------ | :------: |
| Create new | `[POST]` | /api/fakes/ | title`*`, price`*`, img`*`, recipient`*`, address`*`, category_name`*` | json |
| Get all | `[GET,HEAD]` | /api/fakes |  | json |
| Get one | `[GET,HEAD]` | /api/fakes/`<track_id>` |  | json |
| Update | `[PUT,PATCH]` | /api/fakes/`<track_id>` | title, price, img, recipient, address | bool |
| Delete | `[DELETE]` | /api/fakes/`<track_id>` |  | bool |