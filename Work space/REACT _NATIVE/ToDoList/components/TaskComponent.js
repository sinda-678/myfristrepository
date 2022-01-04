import React from "react";
import { Text,View } from "react-native";
class TaskComponent extends React.Component{
    constructor(){
        super()
    }
    render(){
       return <Text onPress={() =>{
           console.log(this.props)
           this.props.navigation.navigate('TaskList')
       }}>button</Text>
    }
}
export default TaskComponent;
