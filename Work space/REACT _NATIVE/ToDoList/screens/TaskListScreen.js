import React from "react";
import { FlatList,Dimensions, SafeAreaView, Text,View } from "react-native";
import { Avatar, ListItem } from "react-native-elements";
import { TASK_LIST_DATA } from "../Constants/API_TASK_LIST";
class TaskListScreen extends React.Component{

  /**
   * Le constructeur
   */
    constructor(props){
        super(props)
    }

    // ===== LEs methodes du cycle de vie

    /**
     *       1-) la methode componentDidMount
     */
    componentDidMount(){
      console.log("Task list ets montee !!")
  }

//   componentWillUnmount(){
//     console.log("LE composant liste est demonte")
// }

    /**
     * 
     * @returns LA methode render
     */
    render(){
      // console.log(this.props.navigation.naviate)
       return (
        <SafeAreaView>
        <FlatList 
         data={TASK_LIST_DATA}
         keyExtractor={ item => item.id.toString()}
         renderItem={ ({item}) => this.displayList({item: item})}
     />
     </SafeAreaView>
       )
       
       } 
       displayList = ({item}) => {
        return(
            <ListItem 
            onPress={() => this.props.navigation.navigate('TaskDetails', {data: item }
            )}
            bottomDivider>
            <Avatar source={require('./../images/img.png')} />
            <ListItem.Content>
              <ListItem.Title>{item.name}</ListItem.Title>
              <ListItem.Subtitle>{item.subtitle}</ListItem.Subtitle>
            </ListItem.Content>
            <ListItem.Chevron />
          </ListItem>
        )
    }
    
}

export default TaskListScreen;
