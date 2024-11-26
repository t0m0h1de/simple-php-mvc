var user = {
  user: "mongo",
  pwd: "mongo",
  roles: [
    {
      role: "dbOwner",
      db: "zipsdb"
    }
  ]
};

db.createUser(user);
db.createCollection('zips');

