import React from "react";
import { View, Text, Image } from 'react-native'
import { Card, ListItem, Button, Icon } from 'react-native-elements'

class TaskDetailsScreen extends React.Component{

    constructor(props){
        super(props)

        this.state ={
            name: '',
            subtitle: '',
            avatar: '',
            id: -1,
        }
    }
    componentDidMount(){
        const data = this.props.route.params.data
        this.setState({
            name: data.name,
            subtitle: data.subtitle,
            avatar: data.avatar_url,
            id: data.id
        })
    }

    // componentWillUnmount(){
    //     console.log("LE composant detail est demonte")
    // }



    render(){
        console.log(this.state.avatar)
        
       return(
        //    <View>
        //        <Text>{this.state.name}</Text>
        //        <Text>{this.state.id}</Text>
        //        <Text>{this.state.avatar}</Text>
        //        <Text>{this.state.subtitle}</Text>
        //    </View>
        <Card>
            <Card.Title>{this.state.name}</Card.Title>
            <Card.Divider/>
            
            <View>
                {/* <Image
                    style={{
                        width: '100%', 
                        height: '80%',
                        justifyContent: 'center',
                        alignContent: 'center',
                        alignItems: 'center',
                        alignSelf: 'center'
                    }}
                    source={require('./../images/img.png')}
                /> */}
                <Text>{this.state.subtitle}</Text>
            </View>
            
        </Card>
       )
    }
}
export default TaskDetailsScreen;