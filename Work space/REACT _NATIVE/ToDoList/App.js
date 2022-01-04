import { NavigationContainer } from '@react-navigation/native'
import React from 'react'
import TaskStack from './navigations/Stack/TaskStack'
//import TaskStack from './Nagation/Stack/TaskStack'



 class App extends React.Component{
     render (){
         return(

            <NavigationContainer>

                <TaskStack />


            </NavigationContainer>
        )
    }
}
export default App
