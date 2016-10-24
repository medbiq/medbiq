# Experience API Scenario Profile

## Medbiquitous Learning Experience Working Group

>"Copyright 2016 .....

> Licensed under Creative Commons, Attribution ( CC BY)
>
## Table of Contents
[Recipes](#recipes)
[Vocabulary](#vocabulary)

## <a name="recipes"></a>Recipes
Can be categorized by situation type or by activity type, or whatever makes sense in context. 
### Medbiquitous Virtual Scenarios
>### Basics/Core Recommendations
* Most statements include an Agent with the user as the 'actor' property.
* Some statements may reference the System or Application as the 'actor' property where the system has updated a counter or made some other change.
* Most statements include the scenario Activity as the 'object'.
* All timestamps in statements must be compliant with ISO 8601 format. (this is part of the xAPI specification) 
* This Profile acts as an extension to the Virtual Patient Profile and was developed from it. Scenarios are more complex than virtual patient cases in that they may contain other learning activities in a blended fashion. While most of these activities will still have an online component, this may not be the core of that activity. 

### Virtual Scenario Activity Definition includes the following:  
* Has the 'type':http://adlnet.gov/expapi/activities/simulation
* The Actor object will be defined by …. 
* The Actor object for most statements with defined verbs will be of type "Agent" and MUST contain an account object.

An example of usage in a statement:

```
{
   "timestamp": 2016-09-22T14:48:06.807818Z,
    "actor": {
         "objectType": "Agent",
        "name": <...>,
        "account": {
            "name": <user_id>
            "homePage": "http://openlabyrinth.ca"
        }
    },
    "verb": {
         id :  http://w3id.org/xapi/medbiq/verbs/arrived,
         display : {
            en-US :  arrived
         }
    },
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
        "registration": 37933467-d275-4e0e-ab26-e2670b2fce6d,
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
## <a name="statements"></a>Statements
### Verb usage:
**Triaged**  
User has made a key decision within a scenario activity stream.   

Verb IRI:  

Includes a timestamp and identifier of the node in the scenario learning design when triage step was started.   

**Assisted**  
User has made a key contribution within a scenario activity stream. This implies that this is a team activity and that another actor has already started this activity stream.   

Verb IRI:  

Includes a timestamp and identifier of the node in the scenario learning design when triage step was started.   

**Bookmarked**  
User or facilitator has made a notation of an activity within a scenario activity stream. This is not the same as Suspended and may simply denote the flagging of this activity within an ongoing stream.   

Verb IRI:  

Includes a timestamp and identifier of the node in the scenario learning design when triage step was started.   

**Coached**  
Facilitator or actor or team leader has made a suggestion to another actor within a scenario activity stream.   

Verb IRI:  

Includes a timestamp and identifier of the node in the scenario learning design when triage step was started.   

**Requested**  
User has made a request to a facilitator for additional information or another resource, during a scenario activity stream. This implies that the information or resource is not immediately visible as an option within the designed scenario activity stream.   

Verb IRI:  

Includes a timestamp and identifier of the node in the scenario learning design when triage step was started.   

**Scored**  
Facilitator has manually assigned a score or rating to an activity within a scenario activity stream. This is different from Updated, where a score or value has been machine-assigned by the player engine or other resource (see below).  

Verb IRI:  

Includes a timestamp and identifier of the node in the scenario learning design when triage step was started.   

**Shared**  
User has made a key resource or piece of information available to team members within a scenario activity stream.   

Verb IRI:  

Includes a timestamp and identifier of the node in the scenario learning design when triage step was started.   

**Cheated**  
User has acted in an unanticipated manner within a scenario activity stream. This is a flag for an activity that the scenario designers had not considered as an option. This is not necessarily a bad thing and may represent a creative solution (viz Kobiyashi Maru scenario). 

Verb IRI:  

Includes a timestamp and identifier of the node in the scenario learning design when triage step was started.   

(The remainder are carried over from the virtual patient profile and should be modified to suit.)

**Initialized**  
User has opened a scenario. Sent when the scenario starts to play.  

Verb IRI: http://adlnet.gov/expapi/verbs/initialized  

Includes a timestamp and identifier of the node in the scenario learning design when playing was started. Most scenarios will have a fixed starting node but this is not always true and is not a requirement for the statement to be true.  

**Completed** 
User has completed the scenario. Reached a node designated by the scenario learning design author as an endpoint. Does not indicate success or failure.  
Verb IRI: http://adlnet.gov/expapi/verbs/completed  

**Suspended**
User has paused a scenario. Suspended a scenario with the possibility to resume later.
Verb IRI: http://adlnet.gov/expapi/verbs/suspended  

**Resumed**  
User has restarted a scenario. Resumed a scenario that had been previously suspended.  
Verb IRI: http://adlnet.gov/expapi/verbs/resumed  

**Terminated**  
User has left a scenario and does not intend to resume. Consider how you will be able to differentiate this from ‘abandoned’, 'suspended' or 'completed' because the player engine may not be able to determine whether the user is coming back again.  
Verb IRI: http://adlnet.gov/expapi/verbs/terminated  

**Arrived***  
User has visited a node within the scenario. Not necessarily same as 'read' or ‘experienced’ because an internal rule or trigger might immediately bounce them on to another node or activity. (See ‘Launched’). So, while the user may have landed on that node, if they are immediately redirected, they may not even see that page/node. Can be used for a physical or virtual location.  
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
User has ignored a flag or other scenario data. This is a flag or action sent by either a facilitator or the player engine to indicate that an action was expected by this point in time and had not occurred. Sometimes this is a good thing, and while absent, is not necessarily a negative aspect - for example, if there is a distractor in place that the actor is supposed to ignore as irrelevant.
Verb: http://w3id.org/xapi/medbiq/verbs/ignored 


For the following activity statements, the Actor is more likely to be the player engine or an object within that player engine:  

**Updated**  
Player engine has changed a counter value. This may be triggered by arrival at a particular node, or by a rule within the case design created by the scenario author, or by a timer expiration point. Although the counter value may be regarded as a score, note that the ADL verb ‘scored’ is overall score for the case or exam (http://adlnet.gov/expapi/verbs/scored), which is not the same thing.  
Verb: http://w3id.org/xapi/medbiq/verbs/updated  

**Launched**  
Player engine has initiated an action such as redirecting the user to a new node, or triggered some other activity. This is not an action made by the user.  

Verb IRI: http://adlnet.gov/expapi/verbs/launched  

## Activities 
To be used mainly if there are very specific activities being described by this profile. Otherwise, Activity types usually used instead.

## <a name="vocabulary"></a>Vocabulary

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
| Virtual Patient |Activity Type | http://adlnet.gov/expapi/activities/simulation |


