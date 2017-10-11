# EventInstance

| \_ | \_ | Data Type | Notes/Description |
| :--- | :--- | :--- | :--- |
| Description | Provides data on a specific instance\(s\) of an event meeting certain parameters |  |  |
| Path | /api/v1/eventinstance |  |  |
| Methods | GET, POST, PUT, DELETE |  |  |
| Parameter | ID | ID | An identifier for the event instance. |
| Filters | Room | String | Room name |
|  | Site | String | Site name |
|  | StartDate | dateString, such as 2012-04-23 | The date this instance of the event began. |
|  | EndDate | dateString, such as 2012-04-12 | The date this instance of the event ended. |
|  | UpdatedAt | dateString, such as 2012-04-12 | The date this instance of the event was updated. |
|  | EventTitle | String | A title for this instance of the event. |
|  | LearnerGroups | String \(or array?\) | Learner Groups associated with this event instance. |
|  | InstructorGroups | String \(Or array?\) | Instrutor groups associated with this instance of the event. |
|  | Learners | String \(should this be array?\) | Learners associated with this instance of the event.. |
|  | Instructors | String \(or array?\) | Instructors associated with this instance of the event. |
| Data Returned | ID | ID | An identifier for the event instance. |
|  | Room | String | Room name |
|  | Site | String | Site name |
|  | StartDate | dateString, such as 2012-04-12 | The date this instance of the event began. |
|  | EndDate | dateString, such as 2012-04-12 | The date this instance of the event ended. |
|  | UpdatedAt | dateString, such as 2012-04-12 | The date this instance of the event was updated. |
|  | EventTitle | String | A title for this instance of the event. |
|  | LearnerGroups | String \(or array?\) | Learner Groups associated with this event instance. |
|  | InstructorGroups | String \(or array?\) | Instructor Groups associated with this event instance |
|  | Learners | String \(or array?\) | Learners associated with this event instance. |
|  | Instructors | String \(or array?\) | Instructors associated with this even instance. |



