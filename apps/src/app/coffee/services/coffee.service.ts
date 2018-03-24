import { Injectable } from '@angular/core';
import { AbstractService } from '../../base/abstract.service';

import { HttpHeaders, HttpClient, HttpParams } from '@angular/common/http';

@Injectable()
export class CoffeeService extends AbstractService {

  protected _apiUrl = 'site/Getajax';


  public getMenu() {

    const body = new HttpParams()
      .set(`get_coffee_menu`, 'true');

    return this.postUrlencoded(this._apiUrl, body);
  }
}
