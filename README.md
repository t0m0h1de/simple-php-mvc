# Simple PHP MVC

## Mongo Viewer (Mongo Express)

```
podman run -it --rm -p 8081:8081 -e ME_CONFIG_MONGODB_URL=mongodb://mongo:mongo@mongo:27017/ -e ME_CONFIG_BASICAUTH_ENABLE=false -e ME_CONFIG_MONGODB_ADMINUSERNAME=mongo -e ME_CONFIG_MONGODB_ADMINPASSWORD=mongo --network php-mvc mongo-express
```


