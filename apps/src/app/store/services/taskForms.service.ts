import { Injectable } from '@angular/core';
import { AbstractService } from '../../base/abstract.service';

import { otherSoftwareFormModel } from '../models/otherSoftware.model';
import { otherAdditionalHardwareModel } from '../models/otherAdditionalHardware.model';
import { switchMailRecipientFromDigestNotificationListModel } from '../models/switchMailRecipientFromDigestNotificationList.model';

@Injectable()
export class taskFormsService extends AbstractService {
  
  protected _apiUrl = '/SC/ServiceCatalog/SaveRequestOffering';
  
  public saveOtherSoftwareForm(otherSoftwareForm: otherSoftwareFormModel) {
    
    return this.post(this._apiUrl, JSON.stringify({   
        AffectedUserId: this.$user.Id,
        Id: "dea956d2-cafe-b766-7f38-06e4aa982fac",
        TargetTemplateId: "f4b7ff5c-f6f4-fabf-a631-ffb96554d44b",
        WatchListUserIds: [],
        AnswerCollection: [
          {
            Answer: otherSoftwareForm.softwareName,
            AnswerType: "String",
            QuestionId: "aeac5603-92c3-4ee8-b037-5824ea83d8a7"
          },
          {
            Answer: otherSoftwareForm.softwareVersion,
            AnswerType: "String",
            QuestionId: "12e78cd8-2f4d-4da3-b7ff-e0042aa645da"
          },
          {
            Answer: otherSoftwareForm.softwareEdition,
            AnswerType: "String",
            QuestionId: "a312cdde-9e39-41dc-860a-7838a87f7693" 
          },
          {
            Answer: otherSoftwareForm.softwareLanguage,
            AnswerType: "String",
            QuestionId: "d7a313cd-4000-4b7e-bf18-1e207eb39d34" 
          },
          {
            Answer: otherSoftwareForm.type,
            AnswerType: "List",
            QuestionId: "c4e4f383-8fa7-4446-bbc1-1227a144980a" 
          },
          {
            Answer: otherSoftwareForm.reasonAndAdditionalInformation,
            AnswerType: "String",
            QuestionId: "80aaaab1-a58a-45d9-8465-62ccc2726b9a" 
          },
          {
            Answer: "d6918379-920c-5f02-20fa-7ccfd4a032de",
            AnswerType: "InstancePicker",
            QuestionId: "fa4800ab-761f-40fb-aec0-eed14287d7f5" 
          }
        ]
    }));
  }

  public saveOtherAdditionalHardwarForm(otherAdditionalHardwareForm: otherAdditionalHardwareModel) {

    return this.post(this._apiUrl, JSON.stringify({
      AffectedUserId: this.$user.Id,
      Id: "b6850ac7-7216-5851-788e-e01429bdf44b",
      TargetTemplateId: "61461329-f3b8-9c05-544e-5ae61b40b52e",
      WatchListUserIds: [],
      AnswerCollection: [
        {
          Answer: otherAdditionalHardwareForm.provideInformationAboutAdditional,
          AnswerType: "String",
          QuestionId: "22ecd32e-863d-4760-a741-1fe71e0c2545" 
        },
        {
          Answer: otherAdditionalHardwareForm.explainTheNeed,
          AnswerType: "String",
          QuestionId: "b5776ae5-87c9-4d5e-94cc-fc372d8212f8"
        },
        {
          Answer: 'd6918379-920c-5f02-20fa-7ccfd4a032de',
          AnswerType: "InstancePicker",
          QuestionId: "eb62d995-130a-46b2-afe3-7957b877a73d"
        }
      ]
    }));

  }

  public saveSwitchMailRecipientFromDigestNotificationList(data:switchMailRecipientFromDigestNotificationListModel) {
    return this.post(this._apiUrl, JSON.stringify({
      AffectedUserId: this.$user.Id,
      Id: "ff183f8f-3aa1-597e-ec2d-8e3d824cc0a1", 
      TargetTemplateId: "6cdde1e0-f0db-5a1f-a9bc-f4abd4104af6", 
      WatchListUserIds: [],
      AnswerCollection: [
        {
          Answer: data.action,
          AnswerType: "List",
          QuestionId: "9b72778c-d9b7-4a91-8684-7b2c3fafe229"
        },
        {
          Answer: data.provideNameDigest,
          AnswerType: "String",
          QuestionId: "7976232a-68c2-4a1a-b0d0-4cbacf5dbb43"
        },
        {
          Answer: data.provideListRecipients,
          AnswerType: "InstancePicker",
          QuestionId: "90584d05-9998-4317-923f-1f14e3fefd94"
        },
        {
          Answer:"",
          AnswerType: "FileAttachment",
          QuestionId: "8b71a1c3-fc19-4514-ba01-24b12b854312"
        },
      ]
    }));
  }

  
}
