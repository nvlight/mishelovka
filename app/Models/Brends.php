<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

/**
 * App\Models\Brends
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\BrendsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Brends newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brends newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brends query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brends whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brends whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brends whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brends whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Brends extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function brendUp($id)
    {
        DB::beginTransaction();

        try {
            $first = Brends::where('id','>',0)->orderby('id','desc')->limit(1)->get();
            $last  = Brends::where('id','>',0)->orderby('id')->limit(1)->get();
            //dump($first);
            //dump($last);

            $result['$first'] = $first[0]->id;
            $result['$last'] = $last[0]->id;
            $result['$current'] = $id;

            Log::info('-----------------------');
            Log::info('$first: ' . $result['$first']);
            Log::info('$last: '  . $result['$last']);
            Log::info('current ID: ' . $id);

            //
            if ($id === $result['$first']){
                // no need to revert this
                $result['success'] = 1;
                $result['message'] = 'Brend is NO need to revert!';
                return $result;
            }

            //DB::insert(...);
            //DB::insert(...);
            //DB::insert(...);

            $allIds = Brends::where('id','>',0)->orderBy('id', 'desc')->pluck('id')->toArray();
            //dump($allIds);
            $searchArrayId = array_search($id, $allIds, true);
            //dump($currId);

            $prevId = $allIds[$searchArrayId - 1];
            Log::info('$prevId: ' . $prevId);

            $maxId = $result['$first'];
            $result = [];
            $result['prevId'] = $prevId;
            $result['currId'] = $id;
            $result['first__max_id'] = $maxId;

            //$result['success'] = 1;
            //$result['message'] = 'Dummy 4!';
            //return $result;

            $currentBrend = Brends::find($id);
            $prevBrend = Brends::find($prevId);

            $prevBrend->id = $maxId + 1;
            $prevBrend->save();
            $currentBrend->id = $prevId;
            $currentBrend->save();
            $prevBrend->id = $id;
            $prevBrend->save();

            DB::commit();

            $trCurrentHtml = View::make('brend.parts.tr', ['brend' => $currentBrend])->render();
            $trPrevHtml    = View::make('brend.parts.tr', ['brend' => $prevBrend])   ->render();
            $result['trCurrentHtml'] = $trCurrentHtml;
            $result['trPrevHtml']    = $trPrevHtml;

            $result['success'] = 1;
            $result['needToRevert'] = 1;
            $result['message'] = 'Brend is reverted updated!';

            // all good
        } catch (\Exception $e) {
            // something went wrong
            DB::rollback();
            $result['success'] = 0;
            $result['message'] = implode(', ', [$e->getMessage(), $e->getFile(), $e->getLine()]);
        }
        return $result;
    }
}
