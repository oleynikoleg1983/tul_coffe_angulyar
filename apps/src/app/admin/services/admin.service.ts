import {Injectable}     from '@angular/core';
import { AbstractService } from '../../base/abstract.service';

@Injectable()
export class AdminService extends AbstractService  {

    protected _apiUrl = '/api/V3/ArticleList';

    public getGada(params: any) {
      console.log('params', params);
      return this.get(this._apiUrl + '?' + this._getUrlParams(params));
    }
}
