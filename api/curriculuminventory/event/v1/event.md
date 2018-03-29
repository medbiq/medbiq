# Event #

|Operation Name || Event |
|-------------- |----------|----------- |
|Description || TBD |
|Path       || /api/v1/event |
| Parameters ||
||
| _**eventId**_
| *data type:*| integer
| *description:*| unique identifier for the given event
||
|**_eventTitle_**
|*data type:*| string
|*description:*| the display title of the event (eg. “Histology and you: a Talk about Hayfever”)
||
|**_eventType_**
|*data type:* |array[string]
|*description:* |the instructional and/or assessment method(s) for the event
||
|**_eventKeywords_**
|*data type:*| array[string]
|*description:*| list of associated keywords for the event
||
|**_eventCompetencyObjects_**
|*data type:*| array[string]
|*description:*| the specific objectives associated with the event
||
|**_eventDescription_**
|*data type:*| string
|*description:*| the text description of the event
||
|**_eventInstance_**
|*data type:*| array[string]
|*description:*| the actual occurrences for when the event is “offered” (see `eventInstance`)
||
|**_eventDuration_**
|*data type:*| integer
|*description:*| number of hours or fractions thereof describing the length of the event (ex.: `1.5`)
||
|**_eventResource_**
|*data type:*| array[string]
|*description:*| the list of instructional resources associated with this event
||
|**_interprofesssional_**
|*data type:*| boolean
|*description:*| whether the event is a valid interprofesional activity
||
|**_eventCurriculumType_**
|*data type:*| string
|*description:*| identifies the event as core or supplemental/elective activity
||
|**_eventSequenceBlock_**
|*data type:*| string
|*description:*| identifies the sequence block (ie “course”) to which the event belongs

From previous:

| || Path Parameters | ID |
|| Query parameters| (all subelements of Event plus id, learningResources, eventInstance, sequenceBlock)
||| (For duration can use fraction of hour (ex, 1.5 for 90 min). Allows to be a json integer.|
||Keyword | have keyword (term itself), keywordSource. keywordID)
||ResourceType | resourceType, resourceTypeSource, resourceTypeID)|
| **Data Returned** || TBD |




