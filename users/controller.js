const express = require('express'),
  router = express.Router(),
  User = require('./models.js').User;

router.route('/')

    .get(function (req, res) {
        User.find()
        .then(function (users) {
            res.locals.users = users;
            return res.render('users/users.html');
        });
    });