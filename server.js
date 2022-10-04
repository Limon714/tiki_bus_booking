const express = require("express");
const {buildSchema} = require("graphql");
const { graphqlHTTP } = require("express-graphql");

const app = express();

const schema = buildSchema(`

type Query{
    hello: String
    welcome(name:String, dayOfWeek:String):String
}

`)

//resolver

const root = {
    hello: () => {
        return 'hello world';
    },
    welcome: (args) => {
        console.log(args)
        return `Welcome ${args.name} in the new world. Today is ${args.dayOfWeek}`;
    },
    
}

//End point
app.use('/graphql', graphqlHTTP({
    graphiql: true,
    schema: schema,
    rootValue: root
}));




app.listen(4000, () => {
    console.log('Server run at 4000 port');
})