# Event #

| \_ | \_ | Data Types | Notes/Description |
| :--- | :--- | :--- | :--- |
| **Description** | Provides data on a specific curricular activity, defined by a set of expectations and goals. May have one or more instances of delivery in the curriculum ( _see_ `eventInstance`) |  |  |
| **Path** | /api/v1/event |  |  |
| **Methods** | GET, POST, PUT, DELETE |  |  |
| **Parameter** | ID | URI |  |
| **Filters** | _programID_ | String | A unique ID for the educational program to query |
|  | _academicLevel_ | String | A unique ID for the Academic level to query |
|  | _sequenceBlock_ | String | A unique id for the Sequence Block to query |
|  | _eventTitle_ | String | the display title of the event (eg. “Histology and you: a Talk about Hayfever”) |
|  | _eventType_  | string | the instructional and/or assessment method(s) for the event |
|  | _eventKeywords_ | String | list of associated keywords for the event |
|  | _eventCurriculumType_ | string | identifies the event as core or supplemental/elective activity  |
| **Data Returned** | ID | ID | An identifier for the event instance. |
|  | eventTitle | string| the title of the curricular event||
|  | eventType | String | the ID of the eventType||
|  | eventCurriculumType ||||
|  | eventKeywords | array | an array of the keywordID values associated with the event ||
|  | eventInstance | array | an array of the eventInstance values where the event is delivered in the curriculum ||
|  | eventSequenceBlock | string | the ID of the sequence block associated with the event ||
|  | eventDescription | String | The text describing the activity/event ||
|  | eventCompetencyObjects | array | a list of the competency objects associated with the event ||
|  | interprofessional ||||
|  | academicLevel ||||
