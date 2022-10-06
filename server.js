const express = require("express");
const {buildSchema} = require("graphql");
const { graphqlHTTP } = require("express-graphql");
const axios = require("axios");

const app = express();

let message = 'This is a message';
const schema = buildSchema(`

type post{
    userId: Int
    id: Int
    title: String
    body: String
}

type user{
    name:String
    age:Int
    college:String
}

type Query{
    hello: String
    welcome(name:String, dayOfWeek:String):String
    getUser: user
    getUsers:[user]
    getPostApi: [post]
    message: String
}
input userInput{
  name:String!
  age:Int!
}


type Mutation{
  setMessage(NewMessage:String) : String
  createUser(user: userInput) : user
}

`);



//resolver

const root = {
  hello: () => {
    return "hello world";
  },
  welcome: (args) => {
    console.log(args);
    return `Welcome ${args.name} in the new world. Today is ${args.dayOfWeek}`;
  },
  getUser: () => {
    //Object

    const user = {
      name: "Reahim",
      age: 23,
      college: "IBA",
    };

    return user;
  },

  getUsers: () => {
    const users = [
      {
        name: "Reahim",
        age: 23,
        college: "IBA",
      },
      {
        name: "Rahim",
        age: 27,
        college: "IBA",
      },
    ];
    return users;
  },

  getPostApi: async () => {
    const result = await axios.get(
      "https://jsonplaceholder.typicode.com/posts"
    );
    // return axios.get('https://jsonplaceholder.typicode.com/posts')
    // .then(result=>result.data)
    return result.data;
  },

    setMessage: ({ NewMessage }) => {
        message = NewMessage;
        return message;
  },
  message: () => message,
    
  createUser: (args) => {
    console.log(args)
    // create a new user inside database
    return args.user
  }
};

//End point
app.use('/graphql',
    graphqlHTTP({
    graphiql: true,
    schema: schema,
    rootValue: root
}));


// It is an interesting topic

app.listen(4000, () => {
    console.log('Server run at 4000 port');
})
