// React
import React from 'react';
// gesture-handler
import 'react-native-gesture-handler';

// Navigation
import { createNativeStackNavigator  } from '@react-navigation/native-stack';
import TaskListScreen from '../../screens/TaskListScreen';
import TaskComponent from '../../components/TaskComponent';
import TaskDetailsScreen from '../../screens/TaskDetailsScreen';
//functions
const TaskRootStack = createNativeStackNavigator ();

class TaskStack extends React.Component{
    render(){
        return(
            <TaskRootStack.Navigator

            
                initialRouteName="TaskList"
            >
                <TaskRootStack.Screen 
                    name="TaskList" 
                    component={TaskListScreen}
                />
                <TaskRootStack.Screen 
                    name="TaskComponent" 
                    component={TaskComponent}
                />
                <TaskRootStack.Screen 
                    name="TaskDetails" 
                    component={TaskDetailsScreen}
                />
                
            </TaskRootStack.Navigator>
        )
    }
}

export default TaskStack;