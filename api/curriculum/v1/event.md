**EVENT**

| &nbsp;| &nbsp;|&nbsp;
| :-----| :-----| :-----|
||**path:**|`/api/v1/event`|
| **parameters:**|
||
|&nbsp;&nbsp;&nbsp; _**eventId**_               |
|| *data type:*| integer|
|| *description:*| unique identifier for the given event|
||
|&nbsp;&nbsp;&nbsp; **_eventTitle_**|
||*data type:*| string|
||*description:*| the display title of the event (eg. “Histology and you: a Talk about Hayfever”)|
||
|&nbsp;&nbsp;&nbsp; **_eventType_**|
||*data type:* |array[string]|
||*description:* |the instructional and/or assessment method(s) for the event|
||
|&nbsp;&nbsp;&nbsp; **_eventKeywords_**|
||*data type:*| array[string]|
||*description:*| list of associated keywords for the event|
||
|&nbsp;&nbsp;&nbsp; **_eventCompetencyObjects_**|
||*data type:*| array[string]|
||*description:*| the specific objectives associated with the event|
||
|&nbsp;&nbsp;&nbsp; **_eventDescription_**|
||*data type:*| string|
||*description:*| the text description of the event|
||
|&nbsp;&nbsp;&nbsp; **_eventInstance_**|
||*data type:*| array[string]|
||*description:*| the actual occurrences for when the event is “offered” (see `eventInstance`)|
||
|&nbsp;&nbsp;&nbsp; **_eventDuration_**|
||*data type:*| integer|
||*description:*| number of hours or fractions thereof describing the length of the event (ex.: `1.5`)|
||
|&nbsp;&nbsp;&nbsp; **_eventResource_**|
||*data type:*| array[string]|
||*description:*| the list of instructional resources associated with this event|
||
|&nbsp;&nbsp;&nbsp; **_interprofesssional_**|
||*data type:*| boolean|
||*description:*| whether the event is a valid interprofesional activity|
||
|&nbsp;&nbsp;&nbsp; **_eventCurriculumType_**|
||*data type:*| string|
||*description:*| identifies the event as core or supplemental/elective activity|
||
|&nbsp;&nbsp;&nbsp; **_eventSequenceBlock_**|
||*data type:*| string|
||*description:*| identifies the sequence block (ie “course”) to which the event belongs|
||
