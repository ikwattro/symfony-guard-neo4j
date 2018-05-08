## Symfony Guard with Neo4j backed User Provider (example)

### Resources :

https://symfony.com/doc/current/security/form_login_setup.html

https://symfony.com/doc/current/security/custom_provider.html


### Setup 

Create a Neo4j user : 

```
CREATE (n:User {username: "neo4j", password: "pass")
```

Run the app

```
php -S localhost:8000 -t public/
```

---

Two endpoints : 

* `/demo` is unsecured

* `/secured/demo` is secured and will redirect to the login form
