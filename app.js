//MongoDB-pass(8FT#fmK*8PJ.Prp)
//MongoDB conn.mongodb+srv://Bondarenko27:<password>@cluster0.0gy1j.mongodb.net/myFirstDatabase?retryWrites=true&w=majority


const express = require ('express');
const bodyParser = require('body-parser');
const mongoose =require('mongoose');
const path = require('path');
const Thing = require('./model/thing');
const thing = require('./models/thing');
mongoose.connect('mongodb+srv://Bondarenko27:8FT#fmK*8PJ.Prp@cluster0.0gy1j.mongodb.net/myFirstDatabase?retryWrites=true&w=majority')
.then(()=>{
    console.log('Successfully connected to MongoDB!');
})
.catch((error)=>{
    console.log('Unable to connect to Mongo DB');
    console.error(error);
})
app.use((req,res,next)=>{
    res.SetHeader('Access-Control-Allow-Origin','*');
    res.SetHeader('Access-Control-Allow-Headers','Origin,X-Requested-With,Content,Accept,Content-Type,Authorization');
    res.SetHeader('Access-Control-Allow-Methods','GET,POST,PUT,DELETE,PATCH,OPTIONS');
    next();
});
app.use (bodyParser.json());
app.use('/images',express.static(path.join(__dirname,'images')))
const stuffRoutes = require('./routes/stuff');
app.use('/api/stuff', stuffRoutes);
const userRoutes = require('./routes/user');