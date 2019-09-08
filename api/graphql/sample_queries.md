## Authenticate User
```
mutation {
  login(data:{
    username: "deondre.cremin@example.com",
    password: "password"
  }) {
    access_token
    refresh_token
    expires_in
    token_type
    user {
      email
      name
    }
  }
}
```

## Create User
```
mutation {
  createUser(
    email: "benborla@icloud.com",
    name: "Ben Borla",
    password: "admin123",
    password_confirmation: "admin123"
  ) {
    id,
    name
  }
}
```
