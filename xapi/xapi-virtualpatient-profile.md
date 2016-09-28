# Experience API Virtual Patient Profile

## Medbiquitous Learning Experience Working Group

>"Copyright 2016 .....

> Licensed under Creative Commons, Attribution ( CC BY)
>
## Table of Contents

## <a name="recipes"></a>Recipes
Can be categorized by situation type or by activity type, or whatever makes sense in context. 
### Medbiquitous Virtual Patient (MVP) standard players
>### Basics/Core Recommendations
* All statements include the Recipe ID in the 'category' context activity list.
* Most statements include an Agent with the user as the 'actor' property.
* Some statements may reference the System or Application as the 'actor' property where the system has updated a counter or made some other change.
* Most statements include the virtual patient Activity as the 'object'.
* All timestamps in statements must be compliant with ISO 8601 format. (this is part of the xAPI specification)  

### Virtual patient Activity Definition includes the following:  
* Has the 'type':http://adlnet.gov/expapi/activities/simulation
* The Actor object will be defined by the virtual patient player. 
* The Actor object for most statements with defined verbs will be of type "Agent" and MUST contain an account object.

An example of usage in a statement:

```
{
   "timestamp": <timestamp>
    "actor": {
         "objectType": "Agent",
        "name": <...>,
        "account": {
            "name": <user_id>
            "homePage": "http://demo.openlabyrinth.ca"
        }
    },
    "verb": <experienced verb object>,
    "object": {
        "id": <node_id>,
        "definition": {
          "extensions": {
            "https://registry.tincanapi.com/xapi/extensions/nodeclass": {
              "@id": "http://demo.openlabyrinth.ca/nodeManager/editNode/17410",
             }
          },
          "name": {
            "en-US": <title of the node>
          },
          "type": "http://activitystrea.ms/schema/1.0/node"
        },
        "objectType": "Activity"
      }
    "context": {
        "registration": <session_id>,
        "contextActivities": {
            "parent": [
                {id: <map_id>}
            ]
        }
    }
    "result": {
        "completion": true
        "score": {<score object>}
        "extensions": {
            <key>: {<counter values object>}
        }
    }
}
``` 
## Statements
### Verb usage:
**Initialized**  
User has opened a case. Sent when the VP case starts to play.  

Verb IRI: http://adlnet.gov/expapi/verbs/initialized  

Includes a timestamp and identifier of the node in the VP when playing was started. Most VP cases will have a fixed starting node but this is not always true and is not a requirement for the statement to be true.  

**Completed** 
User has completed the case. Reached a node designated by the case author as an endpoint. Does not indicate success or failure.  
Verb IRI: http://adlnet.gov/expapi/verbs/completed  
**Suspended**
User has paused a case. Suspended a case with the possibility to resume later.
Verb IRI: http://adlnet.gov/expapi/verbs/suspended  
**Resumed**  
User has restarted a case. Resumed a case that had been previously suspended.  
Verb IRI: http://adlnet.gov/expapi/verbs/resumed  

**Terminated**  
User has left a case and does not intend to resume. Consider how you will be able to differentiate this from ‘abandoned’, 'suspended' or 'completed' because the VP player engine may not be able to determine whether the user is coming back again.  
Verb IRI: http://adlnet.gov/expapi/verbs/terminated  

**Arrived***  
User has visited a node within the VP case. Not necessarily same as 'read' or ‘experienced’ because an internal rule or trigger might immediately bounce them on to another node or activity. (See ‘Launched’). So, while the user may have landed on that node, if they are immediately redirected, they may not even see that page/node. Can be used for a physical or virtual location.  
Verb IRI:  http://w3id.org/xapi/medbiq/verbs/arrived  

**Experienced**  
User has read a document, page or paragraph. Similar to ‘interacted’ but used when the media is static or non-interactive  
Verb IRI: http://adlnet.gov/expapi/verbs/experienced  

**Responded**  
User has responded to a question. Response to an item or question within a node, without moving off that node. (This is not quite the same as ‘answered’ which implies that the answer is correct.)  
Verb IRI: http://adlnet.gov/expapi/verbs/responded  

**Interacted**  
User has interacted with or manipulated an object or a video or similar multimedia that provides some sort of interactivity. Similar to 'experienced' for when the media is dynamic, like a video. For more detailed reporting on videos, we instead recommend the use of the Video Recipe: http://id.tincanapi.com/recipe/video/base/1  
Verb IRI: http://adlnet.gov/expapi/verbs/interacted  

**Commented**  
User has contributed to group activity. Used when an actor adds to a group activity for a compound effect. In some ways, this is not different from ‘responded’. But the net effect is different because you are not expecting that the single activity will necessarily produce some result by itself. The object might be a discussion thread. (Or in OpenLabyrinth, we have a question format called a Cumulative Question, where users contribute phrases to a single question/database field.)  
Verb IRI: http://adlnet.gov/expapi/verbs/commented 

**Ignored**  
User has ignored a flag or other virtual patient data. This is a flag or action sent by either a facilitator or the VP player engine to indicate that an action was expected by this point in time and had not occurred. Sometimes this is a good thing, and while absent, is not necessarily a negative aspect - for example, if there is a distractor in place that the actor is supposed to ignore as irrelevant.
Verb: http://w3id.org/xapi/medbiq/verbs/ignored 


For the following activity statements, the Actor is more likely to be the Virtual Patient player engine or an object within that player engine:  

**Updated**  
VP player engine has changed a counter value. This may be triggered by arrival at a particular node, or by a rule within the case design created by the virtual patient author, or by a timer expiration point. Although the counter value may be regarded as a score, note that the ADL verb ‘scored’ is overall score for the case or exam (http://adlnet.gov/expapi/verbs/scored), which is not the same thing.  
Verb: http://w3id.org/xapi/medbiq/verbs/updated  

**Launched**  
VP player engine has initiated an action such as redirecting the user to a new node, or triggered some other activity. This is not an action made by the user.  

Verb IRI: http://adlnet.gov/expapi/verbs/launched  

## Activities 
To be used mainly if there are very specific activities being described by this profile. Otherwise, Activity types usually used instead.

## Verbs

| Name  | Kind | IRI |
|:------------- |:-----|:---------------|
| Initialized |Verb| http://adlnet.gov/expapi/verbs/initialized |
| Completed |Verb| http://adlnet.gov/expapi/verbs/completed |
| Suspended |Verb| http://adlnet.gov/expapi/verbs/suspended |
| Resumed |Verb| http://adlnet.gov/expapi/verbs/resumed |
| Terminated |Verb| http://adlnet.gov/expapi/verbs/terminated |
| Arrived |Verb| http://w3id.org/xapi/medbiq/verbs/arrived |
| Experienced |Verb| http://adlnet.gov/expapi/verbs/experienced |
| Responded |Verb| http://adlnet.gov/expapi/verbs/responded |
| Interacted |Verb| http://adlnet.gov/expapi/verbs/interacted |
| Commented |Verb| http://adlnet.gov/expapi/verbs/commented |
| Ignored |Verb| http://w3id.org/xapi/medbiq/verbs/ignored |
| Updated |Verb| http://w3id.org/xapi/medbiq/verbs/updated |
| Launched |Verb| http://adlnet.gov/expapi/verbs/launched |

## Activity Types
Virtual Patient	||

