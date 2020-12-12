const express = require('express')
const bodyParser = require('body-parser')
const { check, validationResult, checkSchema } = require('express-validator')
const path = require('path');

const app = express()
const port = 5000

// Set Templating Enginge
app.set('view engine', 'ejs')
app.set('views', __dirname + '/views');
var user = {};

//set static folder
app.use('/', express.static(path.join(__dirname, "public")))

const urlencodedParser = bodyParser.urlencoded({ extended: true })

app.use(express.json());

// Navigation
app.get('/', (req, res) => {
    res.render('index')
})

//middleware validate register
const validateRegister = [
    check('username', 'This username must me 3+ characters long')
        .exists()
        .isLength({ min: 3 }),
    check('useremail', 'Email is not valid')
        .isEmail()
        .normalizeEmail(),
    check('userpass', "Password should not be empty!")
        .exists()
        .isAlphanumeric(),
    check('usercpass', "Confirm password should not be empty!")
        .exists()
        .isAlphanumeric()
];

const authenticate = (req, res, next)=> {
    let username = req.body.username;
    let password = req.body.userpass;

    if(username != user.username || password != user.userpass) {
        console.log('eroor');
        res.render('index', {errors: [{msg: "Credential Doesn't Match!"}]});
        return;
    }
    next();
}

app.post('/login', urlencodedParser, validateRegister,(req, res) => {
    const errors = validationResult(req).errors;
    //compare password - consfirmed password
    if(errors.length>0){
        res.render('index',{errors: errors});
        return;
    }
    // user = req.body;
    Object.assign(user,req.body)
    console.log(user);
    res.render('index');
})

app.post('/home', urlencodedParser, authenticate,(req, res) => {
    console.log(req.body);
    res.render('home',{user: user});
})


// app.post('/register', urlencodedParser, [
//     check('username', 'This username must me 3+ characters long')
//         .exists()
//         .isLength({ min: 3 }),
//     check('email', 'Email is not valid')
//         .isEmail()
//         .normalizeEmail()
// ], (req, res)=> {
//     const errors = validationResult(req)
//     if(!errors.isEmpty()) {
//         // return res.status(422).jsonp(errors.array())
//         const alert = errors.array()
//         res.render('register', {
//             alert
//         })
//     }
//})

app.listen(port, () => console.info(`App listening on port: ${port}`))